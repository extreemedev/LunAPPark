<?php
define("TITLE","Shop");
?>

<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>

    <?php
    session_start();
    if (isset($_SESSION["id"])){
        ?>
        <div id="loader" style="display: none;"></div>
        <div id="mypage" style="display: block;">
        <div class="title pt-custom pb-4">Seleziona un giorno</div>
        <?php
            if(isset($_GET['buy'])){
                if ($_GET['buy'] == "ok") {
                    ?>
                    <div class="text-center mt-3 " style="font-size: 18px;">
                        <div class="alert alert-success text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">Pagamento effettuato con successo!</div>
                    </div>
                    <?php
                }
                elseif ($_GET['buy'] == "no") {
                    ?>
                    <div class="text-center mt-3 " style="font-size: 18px;">
                        <div class="alert alert-danger text-center pb-2 pt-2 ml-5 mr-5" style="display: initial;" role="alert">La transazione non é stata eseguita.</div>
                    </div>
                    <?php
                }
            }
        include("../layouts/calendar.php")
        ?>
        </div>
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" style="top: 126px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text" style="color: black; font-size: 40px; filter: none" id="offcanvasRightLabel">Riepilogo ordine:</h5>
                <button type="button" id="buttonCloseShop" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="pagamento.php" class="form" method="post" name="myShop" onsubmit="return salvaShop();">
                    <div class="pb-1" style="font-weight: bold;">Giorno scelto:</div>
                    <div id="dataScelta" nome="dataScelta" ></div>
                    <hr>
                    <div class="pb-1" style="font-weight: bold;">Prezzo adulto:</div>
                    <div id="prezzoNormale" nome="prezzoNormale" style="float: left;"></div>
                    <div style="float: left;">€</div>
                    <br>
                    <button type="button" name="btInt-" id="btInt-" class="btn btn-primary" style="width: 35px;" disabled>-</button>
                    <label id="bigliettiInt" nome="bigliettiInt" style="width: 30px; text-align: center;">1</label>
                    <button type="button" name="btInt" id="btInt" class="btn btn-primary" style="width: 35px;" disabled>+</button>
                    <hr>
                    <div class="pb-1" style="font-weight: bold;">Prezzo ridotto (sotto i 7 anni):</div>
                    <div id="prezzoRidotto" nome="prezzoRidotto" style="float: left;"></div>
                    <div style="float: left;">€</div>
                    <br>
                    <button type="button" name="btRid-" id="btRid-" class="btn btn-primary" style="width: 35px;" disabled>-</button>
                    <label id="bigliettiRid" nome="bigliettiRid" style="width: 30px; text-align: center;">0</label>
                    <button type="button" name="btRid" id="btRid" class="btn btn-primary" style="width: 35px;" disabled>+</button>
                    <hr>
                    <div class="pb-1" style="font-weight: bold;" id="prezzoTot" name="prezzoTot">Prezzo totale:</div>
                    <div id="totale" nome="totale" style="width: 26px; text-align: left; float: left;">0</div>
                    <div style="float: left;">€</div>
                    <br>
                    <br>
                    <button name="pagamento" id="pagamento" class="btn-grad" type="submit" disabled>Procedi al pagamento</button>
                </form>
            </div>
        </div>
        <?php
    }
    else {
        ?>
        <div class="title pt-custom pb-4 mb-4">Per acquistare il biglietto devi prima effettuare l'accesso
        <div class="subtitle text-center mt-4 mb-custom"><a href="../login/index.php">Clicca qui per accedere!</a></div>
        <picture ><img style="width: 10%; height: 10%;" src="../../src/assets/img/stop.png" alt=""></picture>
        </div>
        <?php
    }

    
    ?>

    <script src="salvaShop.js"></script>
    <script src="../../scripts/calendar.js"></script>
    <script src="../../scripts/shop.js"></script>
        
<?php
include("../layouts/footer.php")
?>