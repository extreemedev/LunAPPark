<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$messaggio = $_POST['messaggio'];

//Controlli
if($nome==""){
    header('location: ./contatti.php?invio=no');
    die();
}

$a = "mattallev@gmail.com";
$oggetto = "Email dal Modulo Contatti del sito web";
$messaggio = "
<h1>Messaggio dal sito:</h1>
<br>
<b>NOME:</b>
" . $nome . "
<br>
<b>EMAIL:</b>
" . $email . "
<br>
<b>MESSAGGIO:</b>
" . $messaggio . "
<br>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:title/html;charset=UTF-8" . "\r\n";
$headers .= 'From: mattallev@gmail.com' . "\r\n";

if (mail($a, $oggetto, $messaggio, $headers)) {
    header('location: ./contatti.php?invio=ok');
    die();
} else {
    header('location: ./contatti.php?invio=no');
    die();
}