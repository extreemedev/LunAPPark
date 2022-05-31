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
        $dbconn = pg_connect("host=postgresql port=5432
        dbname=lunappark user=extreemedev password=example");
        session_start();
        for($i = 0; $i < intval($tInt); $i++) {
            $codice_random = bin2hex(openssl_random_pseudo_bytes(6));
            $codice_univoco = uniqid().$codice_random;
            $email=$_SESSION["id"];
            $tipo="intero";
            $query = 'INSERT into public."BIGLIETTO" values ($1,$2,$3,$4)';
            echo (strtotime($dat));
            $result = pg_query_params($dbconn, $query, array($email, $dat, $tipo, $pInt));
            
        }

        for($i = 0; $i < intval($tRid); $i++) {
            $codice_random = bin2hex(openssl_random_pseudo_bytes(6));
            $codice_univoco = uniqid().$codice_random;
            $email=$_SESSION["id"];
            $tipo="ridotto";
            $query = 'INSERT into public."BIGLIETTO" values ($1,$2,$3,$4)';
            $result = pg_query_params($dbconn, $query, array($email, $dat, $tipo, $pRid));
            
        }
        if($result) {
            /*echo'<script type="title/javascript">myLoader();</script>';*/
            header("Location: index.php");
        } else die("C'é stato un errore");

        /*$email=$_SESSION["id"];
        $dbconn = pg_connect("host=postgresql port=5432
        dbname=lunappark user=extreemedev password=example");
        $query = 'INSERT into public."UTENTE" values ($1,$2,$3,$4,$5,$6)';
        $result = pg_query_params($dbconn, $query, array($email, $nome, $cognome, $password, $telefono, $datanasc));
        if($result) {*/
            /*echo'<script type="title/javascript">myLoader();</script>';*/
            /*header("Location: loading.html");
        }
        else die("C'é stato un errore");*/
   /* }*/
?>