<?php
define("TITLE","LunAPPark");
include("./pages/layouts/header.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="logo" href="#page-top"><img src="src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav__links navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link <?php if(TITLE=="LunAPPark"){echo "border-bottom border-warning";}?>" href="#page-top">Scopri il parco</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(TITLE=="Calendario e tariffe"){echo "border-bottom border-warning";}?>" href="/pages/calendar/index.php">Calendario e tariffe + hotel</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(TITLE=="Info e contatti"){echo "border-bottom border-warning";}?>" href="/pages/info/index.php">Info e contatti</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(TITLE=="Area personale"){echo "border-bottom border-warning";}?>" href="/pages/login/index.php">Area personale</a></li>
                    </ul>
                    <a style="margin-left: 50px;"  class="btn-grad" href="#">Acquista e prenota</a>
                <!--p class="menu btn-grad">-</p-->
                </div>
            </div>
        </nav>
        <div class="mb-custom"></div>

        
        <div class="text imgback imgcut" style="text-align: center">Scopri un nuovo mondo pieno di emozioni!
            <div class="subtext">Biglietto a partire da 20€</div>
            <a class="btn-grad" href="#scroll">Scopri di piú</a>  
        </div>    
        <!--picture id="scroll"><img class="imgcut imgcenter" src="../src/assets/img/wide-park.jpg" width="95%" alt=""></picture-->
        <script type="text/javascript" src="scripts/mobile2.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>