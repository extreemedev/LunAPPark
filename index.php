<?php
define("TITLE","LunAPPark");
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../src/assets/img/logo.png">
    <link rel="stylesheet" href="../../bootstrap/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <style>
        .imgback{
            background-image: url("../../src/assets/img/wide-park.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% ;
        }
    </style>
</head>
<body id="page-top" class="back5">
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
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>