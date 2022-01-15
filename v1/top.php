<button id="myBtn" title="Lên đầu trang">TOP</button>
<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {

if (document.body.scrollTop > 630 || document.documentElement.scrollTop > 540) {
document.getElementById("myBtn").style.display = "block";
} else {
document.getElementById("myBtn").style.display = "none";
}
}

document.getElementById('myBtn').addEventListener("click", function(){
document.body.scrollTop = 0;
document.documentElement.scrollTop =586;
});
</script>
<style> 

/* Mui ten lên dau trang */
#myBtn {
    height: 63px;
    width: 81px;
    display: none;
    position: fixed;
    bottom: 63px;
    right: 45px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #f7db15;
    border: 2px solid #f1f1f1;
    color: white;
    cursor: pointer;
    border-radius: 72px;
    opacity: 100;
}
#myBtn:hover {
background-color: #f1f1f1;
}

</style> 