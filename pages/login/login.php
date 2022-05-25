<?php
    $dbconn = pg_connect("host=postgresql port=5432
    dbname=lunappark user=extreemedev password=example");
    $email = $_POST["inputEmail"];

    $queryname = 'SELECT nome FROM public."UTENTE" where email=$1';
    $resultname = pg_query_params($dbconn, $queryname, array($email));
    $finalname = pg_fetch_array($resultname,null,PGSQL_NUM);

    $query = 'SELECT * FROM public."UTENTE" where email=$1';
    $result = pg_query_params($dbconn, $query, array($email));
    if(!($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
        echo"L'utente non é registrato!";
    }
    else {
        $password = md5($_POST["inputPassword"]);
        $query2 = 'SELECT * FROM public."UTENTE" where email=$1 and password=$2';
        $result = pg_query_params($dbconn, $query2, array($email, $password));
        if(($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
            session_start();
            $_SESSION["user"] = $finalname[0];
            $_SESSION["id"] = $email;
            $_SESSION["load"] = 0;
            header("location: yourarea.php");
        }
        else{
            header("location: error.php");
        };
    }
?>