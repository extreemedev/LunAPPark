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
include("../layouts/calendar.php")
?>

    <!--div class="pt-5"></div-->
    <div style="margin-left: 30px; margin-right: 30px;" class="container">
        
       


        <!-- Button trigger offcanvas -->
        <button type="button" style="right: 70px; position: absolute;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <a id="carrello" href="#page-top"><img src="../../src/assets/img/icons8-cart-64.png" alt="cart"></a>
        </button>

        

    </div>


    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" style="top: 143px;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text" style="color: black" id="offcanvasRightLabel">Riepilogo ordine:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="dataScelta"></div>
            <div id="prezzoNormale"></div>
            <div id="prezzoRidotto"></div>
        </div>
    </div>

    <script src="../../scripts/calendar.js"></script>
        
<?php
include("../layouts/footer.php")
?>