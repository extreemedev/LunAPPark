<?php
$dat=htmlspecialchars($_COOKIE['dataB']);

$pInt=htmlspecialchars($_COOKIE['prezzoInt']);
$tInt=htmlspecialchars($_COOKIE['totInt']);

$pRid=htmlspecialchars($_COOKIE['prezzoRid']);
$tRid=htmlspecialchars($_COOKIE['totRid']);

$tot=htmlspecialchars($_COOKIE['tot']);
?>



<?php
    $dbconn = pg_connect("host=postgresql port=5432
    dbname=lunappark user=extreemedev password=example");
    session_start();
    for($i = 0; $i < intval($tInt); $i++) {
        $email=$_SESSION["id"];
        $tipo="intero";
        $query = 'INSERT into public."BIGLIETTO" values ($1,$2,$3,$4)';
        $result = pg_query_params($dbconn, $query, array($email, $dat, $tipo, $pInt));
    }

    for($i = 0; $i < intval($tRid); $i++) {
        $email=$_SESSION["id"];
        $tipo="ridotto";
        $query = 'INSERT into public."BIGLIETTO" values ($1,$2,$3,$4)';
        $result = pg_query_params($dbconn, $query, array($email, $dat, $tipo, $pRid));    
    }
    if($result) {
        header("Location: index.php");
    } else die("C'é stato un errore");
?>