<?php
session_start();
$sessionid = $_SESSION['inputEmail'];
echo 'Benvenuto utente con email: '.$sessionid;
?>