<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE ?></title>
    <link rel="icon" href="../../src/assets/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../../bootstrap/css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <script src="rememberMe.js"></script>
</head>
<body id="page-top" class="back5" onload="<?php if(TITLE=="Area personale"){echo "myLoader()";} ?>">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="logo" href="#page-top"><img src="../../src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav__links navbar-nav ms-auto">
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="LunAPPark"){echo "border-bottom border-warning";}?>" href="../../index.php">Scopri il parco</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Calendario e tariffe"){echo "border-bottom border-warning";}?>" href="../calendar/index.php">Calendario e tariffe + hotel</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Info e contatti"){echo "border-bottom border-warning";}?>" href="../info/index.php">Info e contatti</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Area personale" or TITLE=="Registrazione"){echo "border-bottom border-warning";}?>" href="../login/index.php">Area personale</a></li>
                    <li id="indietro" class="nav-item" style="<?php if(TITLE!="Registrazione"){echo "display:none;";}?>" ><a class="nav-link" href="../login/index.php">Indietro</a></li>
                </ul>
                <a style="margin-left: 50px; <?php if(TITLE=="Registrazione"){echo "display:none;";}?>" class="btn-grad" href="../shop/index.php">Acquista e prenota</a>
            </div>
        </div>
    </nav>
    <div class="mb-custom"></div>