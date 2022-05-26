<?php
define("TITLE","Area personale");
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


<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>

        <div id="loader" style="display: none;"></div>
        <div id="form" class="title">
            <form action="login.php" class="form-login" method="post" name="myForm" onsubmit="validaForm()">
                <div class="subtitle">Accedi</div>
                
                <input type="email" name="inputEmail" class="form-control" placeholder="Email address" value="<?php echo ($e);?>" required autofocus/>
                <div class="mb-2"></div>
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" value="<?php echo ($p);?>" required/>
                
                <div id="divRemember" class="checkbox">
                    <input type="checkbox" name="remember" <?php echo ($rm);?>/>
                    <label class="checky" for="remember">Remember me</label>
                </div>
                <button class="btn-grad" name="loginButton" type="submit">Accedi</button>
                <a class="btn-grad" name="signupButton" href="../signup/index.php">Registrati</a>  
            </form>
            <label class="checky">Se ancora non hai un account registrati</label>
        </div>
        <script src="../../scripts/loader.js" ></script>

<?php
include("../layouts/footer.php")
?>