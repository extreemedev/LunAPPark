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
    <div class="title mb-3"><?php echo"Benvenuto ".$sessioname?></div>
    <div class="text text-center mb-5">I tuoi biglietti:</div>
    <div class="container pb-custom">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          
          <?php
            session_start();
            $dbconn = pg_connect("host=database port=5432
            dbname=lunappark user=admin password=example");
            $email = $_SESSION["id"];
            $querydate = 'SELECT giorno,tipo,prezzo,codice FROM BigliettoPdf JOIN UtenteRegistrato ON (cf = bigl_utente) WHERE user_mail=$1'; 
            $resultdate = pg_query_params($dbconn, $querydate, array($email));
            if(!($tuple=pg_fetch_array($resultdate,null,PGSQL_ASSOC))) {
              ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="ticket" style="width: 100%; background: linear-gradient(90deg, rgb(109, 106, 143) 0%, rgb(77, 76, 74) 100%);">
                      <img src="../../src/assets/img/ticket.png" align="right" height="120px" width="120px">
                      <div class="nav-item" style="font-size: 35px;"><b>Non hai ancora acquistato biglietti</b></div>
                      <div class="nav-item" style="font-size: 24px;">Controlla i nostri giorni di apertura e pianifica un soggiorno indimenticabile!</div>
                      <br>
                      
                      
                      <p>

                      </p>
                    </div>
                  </div>
              <?php
            }
            else {
              $resultdate = pg_query_params($dbconn, $querydate, array($email));
              $slider = 0;
              while($finaldate = pg_fetch_array($resultdate,null,PGSQL_NUM)){
                  /*echo ($finaldate[0]).", ";*/
                  if ($slider==0){
                    ?>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                  }
                  else{
                    echo ('<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="').($slider).('" aria-label=""></button>');
                  }
                  $slider ++; 
              }
              ?>
              </div>
              <?php
              $resultdate = pg_query_params($dbconn, $querydate, array($email));
              $active = 0;
              while($finaldate = pg_fetch_array($resultdate,null,PGSQL_NUM)){
                $data = $finaldate[0];
                $tipo = $finaldate[1];
                $prezzo = $finaldate[2];
                $codice = "IT-LNPK#".$finaldate[3];
                if ($active==0){
                  $active ++;
                  ?>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="ticket">
                        <img src="../../src/assets/img/qrcode.png" align="right" height="120px" width="120px">

                        <div class="mt-3">Biglietto <?php echo($tipo) ?> </div>
                        <div class="" style="font-size: 30px;">LunAPPark</div>
                        <br>
                        <div class="mt-2" style="font-size: 20px;">Codice biglietto:</div>
                        <div class="mt-2" style="font-size: 20px;"><?php echo($codice) ?></div>
                        <hr>
                        <p>
                          <ul>
                            <li>Apertura dei cancelli: 10:30</li>
                            <br>
                            <li>Data: <?php echo($data) ?></li>
                            <br>
                            <li>Prezzo: <?php echo($prezzo).('€') ?></li>
                          </ul>
                        </p>
                      </div>
                    </div>
                  <?php
                }
                else{
                  ?>
                  <div class="carousel-item">
                    <div class="ticket">
                      <img src="../../src/assets/img/qrcode.png" align="right" height="120px" width="120px">

                      <div class="mt-3">Biglietto <?php echo($tipo) ?> </div>
                      <div class="" style="font-size: 30px;">LunAPPark</div>
                      <br>
                      <div class="mt-2" style="font-size: 20px;">Codice biglietto:</div>
                      <div class="mt-2" style="font-size: 20px;"><?php echo($codice) ?></div>
                      <hr>
                      <p>
                        <ul>
                          <li>Apertura dei cancelli: 10:30</li>
                          <br>
                          <li>Data: <?php echo($data) ?></li>
                          <br>
                          <li>Prezzo: <?php echo($prezzo).('€') ?></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                  <?php
                }

              }
            }
          ?>
              
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
    
    <div class="text-center mb-5">       
    <a class="btn-grad" style="display: initial;" href="./queue.php">Prenota un turno sulla Giostra</a>
    </div>

    <div class="text-center mt-5">       
    <a class="btn-grad" style="display: initial;" href="./out.php">Logout</a>
    </div>
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

 
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>