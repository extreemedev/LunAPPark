<?php
session_start();
echo $_SESSION["load"];
$dir = $_SERVER['SCRIPT_NAME'];
echo $dir;
?>