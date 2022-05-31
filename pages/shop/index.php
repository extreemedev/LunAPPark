<?php
define("TITLE","Shop");
?>

<?php
include("../layouts/header.php")
?>

<?php
include("../layouts/navbar.php")
?>


<div class="title pt-custom">Seleziona un giorno</div>

<?php
include("../layouts/calendar.php")
?>

    <!--div class="pt-5"></div-->
    <!--div style="margin-left: 30px; margin-right: 30px;" class="container"-->
        
       


        <!-- Button trigger offcanvas -->
        <!--button type="button" style="right: 70px; position: absolute;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <a id="carrello" href="#page-top"><img src="../../src/assets/img/icons8-cart-64.png" alt="cart"></a>
        </button>

        

    </div-->


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

    <script src="salvaShop.js"></script>
    <script src="../../scripts/calendar.js"></script>
    <script src="../../scripts/shop.js"></script>
        
<?php
include("../layouts/footer.php")
?>