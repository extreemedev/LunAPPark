<?php
define("TITLE","Calendario e tariffe");
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="refresh" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE ?></title>
    <link rel="icon" href="../../src/assets/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../../bootstrap/css/styles.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <script src="rememberMe.js"></script>
    <script src="//code.jquery.com/jquery-3.6.0.js"></script>
</head>


<?php
include("../layouts/navbar.php")
?>

<?php
include("./index2.php")
?>
   
    <script src="calendar.js"></script>

<?php
include("../layouts/footer.php")
?>