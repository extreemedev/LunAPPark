<?php
define("TITLE","Area personale");
session_start();
$sessionmail = $_SESSION["id"];
if($sessionmail){
    header('location: yourarea.php');
}
?>
<!DOCTYPE html>
    <head>
        <meta http-equiv="refresh" content="" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Area personale</title>
        <link rel="icon" href="../../src/assets/img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="../../bootstrap/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <script src="./rememberMe.js"></script>
    </head>
    <body id="page-top" class="back5">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="logo" href="#page-top"><img src="../../src/assets/img/logo.png" width="120px" height="110px" object-fit="scale-down" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav__links navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="../../index.html">Scopri il parco</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/calendar/index.html">Calendario e tariffe + hotel</a></li>
                        <li class="nav-item"><a class="nav-link" href="/pages/info/index.html">Info e contatti</a></li>
                        <li class="nav-item border-bottom border-warning"><a class="nav-link" href="#">Area personale</a></li>
                    </ul>
                    <a style="margin-left: 50px;"  class="btn-grad" href="#">Acquista e prenota</a>
                <!--p class="menu btn-grad">-</p-->
                </div>
            </div>
        </nav>
        <?php
        $rm = "";
        $e = "";
        $p = "";
        if (array_key_exists('rem', $_COOKIE)) {
            $rm=htmlspecialchars($_COOKIE['rem']);
            //echo($rm);
            if($rm=='true'){
                $rm="checked";
                //echo($rm);
                $e=htmlspecialchars($_COOKIE['email']);
                $p=htmlspecialchars($_COOKIE['pas']);
            } else {
                $rm = "";
            }
        }
        ?>
        <div class="mb-custom"></div>
        <div id="loader" style="display: none;"></div>
        <div id="form" class="text">
            <form action="login.php" class="form-login" method="post" name="myForm" onsubmit="validaForm()">
                <div class="subtext">Accedi</div>
                
                <input type="email" name="inputEmail" class="form-control" placeholder="Email address" value="<?php echo ($e);?>" required autofocus/>
                <div class="mb-2"></div>
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" value="<?php echo ($p);?>" required/>
                
                <div id="divRemember" class="checkbox">
                    <input type="checkbox" name="remember" <?php echo ($rm);?>/>
                    <label class="checky" for="remember">Remember me</label>
                </div>
                <button class="btn-grad" name="loginButton" type="submit">Accedi</button>
                <a class="btn-grad" name="signupButton" href="../signup/index.html">Registrati</a>  
            </form>
            <label class="checky">Se ancora non hai un account registrati</label>
        </div>
        <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
        <script src="../../scripts/loader.js" ></script>
    </body>
</html>