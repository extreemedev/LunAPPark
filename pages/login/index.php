<?php
define("TITLE","Accedi");
session_start();
$sessionmail = $_SESSION["id"];
if($sessionmail){
    header('location: yourarea.php');
}
?>


<?php
$rm = "";
$e = "";
$p = "";
$rm2="";
if (array_key_exists('rem', $_COOKIE)) {
    $rm=htmlspecialchars($_COOKIE['rem']);
    //echo($rm);
    if($rm=='true'){
        $rm2="checked";
        //echo($rm);
        $e=htmlspecialchars($_COOKIE['email']);
        $p=htmlspecialchars($_COOKIE['pas']);
    } else {
        $rm2 = "";
    }
}
?>


<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>

            

    <div id="loader" style="display: none;"></div>
    <div id="form" class="title pt-custom" style="text-align: center;">Accedi

        <?php
        // Controllo valid
        if (isset($_GET['valid'])) {

            if ($_GET['valid'] == "mail") {
                ?>  
                <div class="text-center mt-5 d-row" style="font-size: 14px;">
                    <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">L'email inserita non é registrata!</div>
                </div>
                <?php
            } 
            
            elseif ($_GET['valid'] == "pw") {
                ?>
                <div class="text-center mt-5 d-row" style="font-size: 14px;">
                    <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">La password inserita non é corretta!</div>
                </div>
                <?php
            }

        }
        ?>

        <form action="login.php" class="form-login" method="post" name="myForm" onsubmit="return rememberMe();">
            <!--div class="subtitle">Accedi</div-->
            <div class="mb-5" ></div>
            <input type="email" name="inputEmail" <?php if ($_GET['valid'] == "mail"){echo'style="box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);"';} ?> class="form-control" placeholder="Email address" value="<?php echo ($e);?>" required autofocus/>
            <div class="mb-2"></div>
            <input type="password" name="inputPassword" <?php if ($_GET['valid'] == "pw"){echo'style="box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);"';} ?> class="form-control" placeholder="Password" value="<?php echo ($p);?>" required/>
            
            <div id="divRemember" class="checkbox">
                <input type="checkbox" name="remember" <?php echo ($rm2);?>/>
                <label class="checky" for="remember">Remember me</label>
            </div>
            <button class="btn-grad" name="loginButton" type="submit">Accedi</button>
            <a class="btn-grad" name="signupButton" href="../signup/index.php">Registrati</a>  
        </form>
        <label class="checky">Se ancora non hai un account registrati</label>
    </div>
    <script src="rememberMe.js"></script>
    <script src="../../scripts/loader.js" ></script>

<?php
include("../layouts/footer.php")
?>