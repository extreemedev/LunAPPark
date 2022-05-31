<?php
$dat=htmlspecialchars($_COOKIE['dataB']);
$pInt=htmlspecialchars($_COOKIE['prezzoInt']);
$tInt=htmlspecialchars($_COOKIE['totInt']);
$pRid=htmlspecialchars($_COOKIE['prezzoRid']);
$tRid=htmlspecialchars($_COOKIE['totRid']);
$tot=htmlspecialchars($_COOKIE['tot']);
?>



<?php
    /*if(!isset($_POST["signupButton"])) {
        header("Location: index.html");
    }
    else{*/
        $email=$_SESSION["id"];
        $dbconn = pg_connect("host=postgresql port=5432
        dbname=lunappark user=extreemedev password=example");
        $query = 'INSERT into public."UTENTE" values ($1,$2,$3,$4,$5,$6)';
        $result = pg_query_params($dbconn, $query, array($email, $nome, $cognome, $password, $telefono, $datanasc));
        if($result) {
            /*echo'<script type="title/javascript">myLoader();</script>';*/
            header("Location: loading.html");
        }
        else die("C'é stato un errore");
   /* }*/
?>