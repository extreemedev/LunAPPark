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

<?php
include("../layouts/navbar.php")
?>

        <div id="loader" style="display: none;"></div>
        <div id="mypage" class="title pt-custom" style="text-align: center;">Effettua la registrazione

        <?php
        // Controllo valid
        if (isset($_GET['valid'])) {

            if ($_GET['valid'] == "mail") {
                ?>  
                <div class="text-center mt-5 d-row" style="font-size: 14px;">
                    <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Esiste già un account con questa email</div>
                </div>
                <?php
            } 
            
            elseif ($_GET['valid'] == "db") {
                ?>
                <div class="text-center mt-5 d-row" style="font-size: 14px;">
                    <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Non é possibile connettersi al sistema!</div>
                </div>
                <?php
            }

            elseif ($_GET['valid'] == "ok") {
                ?>
                <div class="text-center mt-5 d-row" style="font-size: 14px;">
                    <div class="alert alert-success text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Registrazione andata a buon fine. <a href="../login/index.php">Accedi qui!</a></div>
                </div>
                <?php
            }
        }
        ?>

            <form action="signup.php" class="form-signup" method="post" name="myRegistr" onsubmit="return validaForm();">
                <!--div class="subtitle">Effettua la registrazione</div-->
                <label class="checky" for="nome">Nome:</label>
                <input type="nome" name="nome" class="form-control" placeholder="Nome" size="30" maxlength="30"><!--box-shadow: 0 0 0 0.25rem #ffc4657a;-->
                
                <label class="checky" for="cognome">Cognome:</label>
                <input type="cognome" name="cognome" class="form-control" placeholder="Cognome" size="30" maxlength="30">
                
                <label class="checky" for="email">Email:</label>
                <input type="email" name="email" class="form-control" <?php if ($_GET['valid'] == "mail"){echo'style="box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);"';} ?> placeholder="Indirizzo email" size="40" maxlength="40">
                
                <label class="checky" for="confermaemail">Conferma email:</label>
                <input type="email" name="confermaemail" class="form-control" <?php if ($_GET['valid'] == "mail"){echo'style="box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.5);"';} ?> placeholder="Indirizzo email" size="40" maxlength="40">
                
                <label class="checky" for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" size="30" maxlength="30">
                
                <label class="checky" for="confermapassword">Conferma password:</label>
                <input type="password" name="confermapassword" class="form-control" placeholder="Password" size="30" maxlength="30">
                
                <label class="checky" for="tel">Telefono:</label>
                <input type="tel" name="tel" class="form-control" placeholder="Telefono" max="12">
                
                <label class="checky" for="data">Data di nascita:</label>
                <input type="date" name="data" class="form-control" max="2021-12-31" min="1900-01-01">
                <div class="mt-4" ></div>
                <button class="btn-grad" name="signupButton" type="submit">Registrati</button>
            </form>
        </div>
        <script src="validaForm.js"></script>
        <script src="../../scripts/loader.js" ></script>

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


<?php
include("../layouts/footer.php")
?>