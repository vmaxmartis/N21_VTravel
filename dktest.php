
<!DOCTYPE>
<html>
<head>

        <?php include("./v1/css.php") ?>
        <?php include("./v1/header.php") ?>
</head>
<body >

    <?php if(isset($_SESSION['email'])) {
        echo '<H1 style="color:#f22 ">Bạn đang đăng nhập</H1>';
        echo ' <script>
            var timer = setTimeout(function() {
                window.location="./"
            }, 3000);
        </script>';
        die();
    } ?>
    <?php include "./view/registrationform.html" ?>
        <?php
        include "./control/xulydangky.php"
        ?>
    
    
    </body>
    <?php (require_once"./v1/footer.php");?>
    <?php include("./v1/scrip.php") ?>
</html>