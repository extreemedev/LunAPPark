<body id="page-top" class="back5" onload="<?php if(TITLE=="Area personale" and $_SESSION["load"]==0){echo "myLoader()"; $_SESSION["load"]=1; } elseif($_GET['valid'] == "ok"){echo "myLoader()";} ?>">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="logo" href="#page-top"><img src="../../src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
            <?php if (true){echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>';} ?>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav__links navbar-nav ms-auto">
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="LunAPPark"){echo "border-bottom border-warning";}?>" href="/index.php">Scopri il parco</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Calendario e tariffe"){echo "border-bottom border-warning";}?>" href="/pages/calendar/index.php">Calendario e tariffe + hotel</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Info e contatti"){echo "border-bottom border-warning";}?>" href="/pages/info/index.php">Info e contatti</a></li>
                    <li class="nav-item" style="<?php if(TITLE=="Registrazione"){echo "display:none;";}?>"><a class="nav-link <?php if(TITLE=="Area personale" or TITLE=="Registrazione" or TITLE=="Accedi"){echo "border-bottom border-warning";}?>" href="/pages/login/index.php">Area personale</a></li>
                    <li id="indietro" class="nav-item" style="<?php if(TITLE!="Registrazione"){echo "display:none;";}?>" ><a class="nav-link" href="/pages/login/index.php">Indietro</a></li>
                </ul>
                <a style="margin-left: 50px; <?php if(TITLE=="Registrazione"){echo "display:none;";}?>" class="btn-grad" href="/pages/shop/index.php">Acquista e prenota</a>
            </div>
        </div>
    </nav>
    <div class="mb-custom"></div>