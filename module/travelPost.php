<?php

use phpDocumentor\Reflection\Types\Boolean;

class travelPost
    {
        private $getconect;
        private $conect;
        function __construct() {
            require_once "ConnectDatabase.php";
            $this->getconect = new connectDatabase();
            $this->conect = $this->getconect->connect();
         }
        public function getlistTravelviewing(){
            
            $sql = "SELECT * FROM travel";
            $data = mysqli_query($this->conect, $sql);
            $count = mysqli_num_rows($data);
            if($count == 0) {
                $this->getconect->dieconnect($this->conect); return array();
            }
            else {
                $getdata = array(array());
                $dem=0;
                while($getdatabase = mysqli_fetch_assoc($data)){
                    $getdata[$dem][0]=$getdatabase['id'];
                    $getdata[$dem][1]=$getdatabase['city'];
                    $getdata[$dem][2]=$getdatabase['regions'];
                    $getdata[$dem][3]=$getdatabase['title'];
                    $getdata[$dem][4]=$getdatabase['iva1'];
                    $getdata[$dem][5]=$getdatabase['address'];
                    $getdata[$dem][6]=$getdatabase['author'];
                    $getdata[$dem][7]=$getdatabase['content'];
                    $getdata[$dem][8]=$getdatabase['scontent'];
                    $getdata[$dem][9]=$getdatabase['like'];
                    $getdata[$dem][10]=$getdatabase['map'];
                    $getdata[$dem][11]=$getdatabase['cmt_id'];
                    $getdata[$dem][12]=$getdatabase['yt'];
                        $dem++;
                }
                return $getdata;
            }
            return array();
        }
        public function getTravelviewingByID($id){
            $sql = "SELECT * FROM travel where id = '$id'";
            $data = mysqli_query($this->conect, $sql);
            $count = mysqli_num_rows($data);
            if($count == 0) {
                return array();
            }
            else {
                $getdata = array();
                $dem=0;
                $getdatabase = mysqli_fetch_assoc($data);
                    $getdata[0]=$getdatabase['id'];
                    $getdata[1]=$getdatabase['city'];
                    $getdata[2]=$getdatabase['regions'];
                    $getdata[3]=$getdatabase['title'];
                    $getdata[4]=$getdatabase['iva1'];
                    $getdata[5]=$getdatabase['address'];
                    $getdata[6]=$getdatabase['author'];
                    $getdata[7]=$getdatabase['content'];
                    $getdata[8]=$getdatabase['scontent'];
                    $getdata[9]=$getdatabase['like'];
                    $getdata[10]=$getdatabase['map'];
                    $getdata[11]=$getdatabase['cmt_id'];
                    $getdata[12]=$getdatabase['yt'];
                
                 $dem++;
          
                return $getdata;
            }
            return array();
        }

        
        public function addcomment($email, $post, $cmt)
        {
         if(!$this->conect){
             return false;
         }else{
                 $sql ="INSERT INTO comment_travelviewing values(NULL, '$email', $post, '$cmt')";
                 mysqli_query($this->conect, $sql);
                 return true;
         }
         return false;
        }

        public function getListcomment($idpost){
            if(!$this->getconect){
                return false;
            }else{
                    $data = array(array());
                    $sql = "SELECT * FROM `comment_travelviewing` WHERE id = 1";
                 
                    $getdata = mysqli_query($this->conect, $sql);
                    if(mysqli_num_rows ($getdata) <= 0) return false;
                    
                        $dem=0;
                        while($linedata = mysqli_fetch_assoc($getdata)){
                            $data[$dem][0] = $linedata['cmt'];
                            $getiduserinpost =  $linedata['id_user'];
                            echo "id: ".$getiduserinpost; 
                            echo "---". $data[$dem][0]."----".$idpost;
                            $sql = "SELECT name from user where email = '$getiduserinpost'";                           
                            echo $sql;
                            $getNameuser = mysqli_fetch_assoc(mysqli_query($this->conect, $sql))['name'];
                            $data[$dem][1] = $getNameuser;
                            $dem++;
                        }
                    
                    return $data;
            }
            return null;
        }

        public function DeleteByID($id){
            $sql = "delete from travelviewing where id = $id";
            echo $sql;
            try {
                mysqli_query($this->conect, $sql);
                $sql = "delete from comment_travelviewing where id_post = $id";
                echo $sql;
                mysqli_query($this->conect, $sql);
                return true;
            }catch (Exception $e) {
                return false;
            }
        }


        public function dieconnect()
        {
            $this->getconect->dieconnect($this->conect);
        }

    }
   
    
?>