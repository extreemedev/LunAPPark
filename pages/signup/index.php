<?php
define("TITLE","Registrazione");
session_start();
$sessionmail = $_SESSION["id"];
if($sessionmail){
    header('location: ../login/yourarea.php');
}
?>

<?php
include("../layouts/header.php")
?>

        <div id="loader" style="display: none;"></div>
        <div id="form" class="text">
            <form action="signup.php" class="form-signup" method="post" name="myRegistr" onsubmit="return validaForm();">
                <div class="subtext">Registrati</div>
                <label class="checky" for="nome">Nome:</label>
                <input type="nome" name="nome" class="form-control" placeholder="Nome" size="30" maxlength="30"><!--box-shadow: 0 0 0 0.25rem #ffc4657a;-->
                
                <label class="checky" for="cognome">Cognome:</label>
                <input type="cognome" name="cognome" class="form-control" placeholder="Cognome" size="30" maxlength="30">
                
                <label class="checky" for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Indirizzo email" size="40" maxlength="40">
                
                <label class="checky" for="confermaemail">Conferma email:</label>
                <input type="email" name="confermaemail" class="form-control" placeholder="Indirizzo email" size="40" maxlength="40">
                
                <label class="checky" for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" size="30" maxlength="30">
                
                <label class="checky" for="confermapassword">Conferma password:</label>
                <input type="password" name="confermapassword" class="form-control" placeholder="Password" size="30" maxlength="30">
                
                <label class="checky" for="tel">Telefono:</label>
                <input type="tel" name="tel" class="form-control" placeholder="Telefono" max="12">
                
                <label class="checky" for="data">Data di nascita:</label>
                <input type="date" name="data" class="form-control" max="2021-12-31" min="1900-01-01">
                
                <button class="btn-grad" name="signupButton" type="submit">Registrati</button>
            </form>
        </div>
        <script src="validaForm.js"></script>
        <script src="../../scripts/loader.js" ></script>
<?php
include("../layouts/footer.php")
?>