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

<div id="loader" style="display: none;"></div>
<div class="pt-custom"></div>
<div id="mypage" style="display: block;" class="animate-bottom">
    <div class="title mb-custom"><?php echo"Benvenuto ".$sessioname?></div>
    <a class="btn-grad" style="display: initial;" href="./out.php">Logout</a>
</div>

<script>
var myVar;

function myLoader() {
  myVar = setTimeout(showLoader, 0);
  myVar = setTimeout(showPage, 2000);

}

function showLoader(){
  document.getElementById("loader").style.display = "block";
  document.getElementById("mypage").style.display = "none";

}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("mypage").style.display = "block";
}

</script>

<?php
include("../layouts/footer.php")
?>