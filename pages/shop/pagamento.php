<?php
$dat=htmlspecialchars($_COOKIE['dataB']);

$pInt=htmlspecialchars($_COOKIE['prezzoInt']);
$tInt=htmlspecialchars($_COOKIE['totInt']);

$pRid=htmlspecialchars($_COOKIE['prezzoRid']);
$tRid=htmlspecialchars($_COOKIE['totRid']);

$tot=htmlspecialchars($_COOKIE['tot']);
?>



<?php
    $dbconn = pg_connect("host=database port=5432
    dbname=lunappark user=admin password=example");
    session_start();
    for($i = 0; $i < intval($tInt); $i++) {
        $email = $_SESSION["id"];
        $tipo = "intero";
        $querycf = pg_query_params($dbconn, 'SELECT cf FROM UtenteRegistrato WHERE user_mail=$1', array($email));
        $cf = pg_fetch_array($querycf,null,PGSQL_NUM);
        $query = 'INSERT INTO BigliettoPdf(tipo, prezzo, giorno, bigl_utente, bigl_data) VALUES ($1,$2,$3,$4,$5)';
        $result = pg_query_params($dbconn, $query, array($tipo, $pInt, $dat, $cf[0], $dat));
    }

    for($i = 0; $i < intval($tRid); $i++) {
        $email = $_SESSION["id"];
        $tipo = "ridotto";
        $querycf = pg_query_params($dbconn, 'SELECT cf FROM UtenteRegistrato WHERE user_mail=$1', array($email));
        $cf = pg_fetch_array($querycf,null,PGSQL_NUM);
        $query = 'INSERT INTO BigliettoPdf(tipo, prezzo, giorno, bigl_utente, bigl_data) VALUES ($1,$2,$3,$4,$5)';
        $result = pg_query_params($dbconn, $query, array($tipo, $pRid, $dat, $cf[0], $dat)); 
    }
    if($result) {
        session_start();
        $_SESSION["shopload"]=1;
        header("location: index.php?buy=ok");
    } 
    else {
        header("location: index.php?buy=no");
    }
?>