<?php
session_start();
$sessionid = $_SESSION["id"];
echo 'Benvenuto utente con email: '.$sessionid;
if($sessionid==""){
    header('location: error.php');
}
?>