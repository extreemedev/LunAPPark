<?php
define("TITLE","Info e contatti");
/*include("./pages/layouts/header.php");*/
?>
<html>
    <head>
        <meta http-equiv="refresh" content="5" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Info e contatti</title>
        <link rel="icon" href="../../src/assets/img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="../../bootstrap/css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <style>
            img:hover {
            /* Start the shake animation and make the animation last for 0.5 seconds */
            animation: shake 0.5s;

            /* When the animation is finished, start again */
            animation-iteration-count: infinite;
            }

            @keyframes shake {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
            }
        </style>
    </head>
    <body id="page-top" class="back5">
        <?php 
        include("./pages/layouts/navbar.php");
        ?>
        <div class="text floating" >Chi siamo?</div>
        <picture id="scroll"><img class="imgcut imgcenter floating" src="../../src/assets/img/soffuerenginerin.png" width="35%" style="position: center;" alt=""></picture>
        <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>