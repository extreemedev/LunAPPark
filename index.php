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
    <link rel="stylesheet" href="./bootstrap/css/styles.css">
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
                <a style="margin-left: 50px;"  class="btn-grad" href="/pages/shop/index.php">Acquista e prenota</a>
            <!--p class="menu btn-grad">-</p-->
            </div>
        </div>
    </nav>
    <div class="mb-custom"></div>
    <div style="padding-top: 38px;"></div>

        <div class="container pt-custom pb-5 mb-5 imgback" style="max-width: 100%; filter: drop-shadow(0px 5px 50px #222);">
            <div class="title" style="text-align: center; filter: drop-shadow(5px 5px 5px rgb(0, 0, 0));">Scopri un nuovo mondo pieno di emozioni!
                <div class="pt-5"></div>
                <div class="subtitle">Biglietto a partire da 10€*</div>
                <div class="pt-5"></div>
                <a class="btn-grad" href="#scroll">Scopri di piú</a>  
            </div> 
        </div>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #e6ffe6);"><img class="img-fluid rounded-circle" src="./src/assets/img/gardaland.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="subtitle">Piú di 150.000mq</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #333333);"><img class="img-fluid rounded-circle" src="./src/assets/img/biglietto.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="subtitle">Il biglietto ridotto costa solo 10€!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #003366);"><img class="img-fluid rounded-circle" src="./src/assets/img/rainbow.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="subtitle">Spettacoli serali e notturni!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 4-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #99ccff);"><img class="img-fluid rounded-circle" src="./src/assets/img/russian-mountain.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="subtitle">Giostre mozzafiato!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 5-->
    <section>
        <div class="container px-5 text-white">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="filter: drop-shadow(0px 5px 70px #ccccb3);"><img class="img-fluid rounded-circle" src="./src/assets/img/stanza.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="subtitle">Anche con hotel convenzionato!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--picture style="display: absolute;" id="scroll"><img class="imgcut imgcenter" src="../src/assets/img/wide-park.jpg" width="100%" alt=""></picture-->   
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>

<?php 
include("./pages/layouts/footer.php")
?>