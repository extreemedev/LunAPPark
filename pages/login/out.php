<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["load"]);
header("location: ./index.php");
?>  