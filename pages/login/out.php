<?php
session_start();
unset($_SESSION['inputEmail']);
header("location: ./index.html");
?>  