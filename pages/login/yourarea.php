<?php
define("TITLE","Area personale");
?>

<?php
session_start();
$sessionmail = $_SESSION["id"];
$sessioname = $_SESSION["user"];
if($sessionmail==""){
    header('location: ./index.php');
}
?>

<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>

<div id="loader"></div>
<div class="pt-custom"></div>
<div id="mypage" class="animate-bottom">
    <div class="title"><?php echo"Benvenuto ".$sessioname?></div>
    <a class="btn-grad" style="display: initial;" href="./out.php">Logout</a>
</div>

<script>
var myVar;

function myLoader() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("mypage").style.display = "block";
}

</script>

<?php
include("../layouts/footer.php")
?>