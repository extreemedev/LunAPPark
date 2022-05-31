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


    <div class="container w-75 pb-custom">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

        
          <div class="carousel-item active">
            <div class="card2" style="width: 100%;">
              <img src="../../src/assets/img/ticket.png" align="right" height="120px" width="120px">
              <div class="nav-item" style="font-size: 50px;"><b>Niente biglietti porcodio!</b></div>
              <div class="nav-item" style="font-size: 30px;">Controlla i nostri giorni di apertura e pianifica un soggiorno indimenticabile!</div>
              <br>
              <p>In questa sezione troverai i giorni di <b>apertura</b> del parco. Vuoi conoscere le giornate in cui siamo
                aperti per <B>prenotare</B>? O quali sono gli <b>orari</b> di apertura del Parco per il giorno in cui vorresti
                venire? In questa sezione trovi tutte le informazioni di cui hai bisogno!</p>
              <p>Siamo aperti tutti i giorni!</p>
              <hr>
              <p>
                <ul>
                  <li>Da lunedì fino a venerdi: 10:30-18:00</li>
                  <br>
                  <li>Sabato: 10:30-01:30</li>
                  <br>
                  <li>Domenica: 10:30-22:30</li>
                </ul>
              </p>
            </div>
          </div>


          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>


          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>


        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


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