<?php
    $dbconn = pg_connect("host=postgresql port=5432
    dbname=lunappark user=extreemedev password=example");
    $email = $_POST["inputEmail"];

    $queryname = 'SELECT nome FROM public."UTENTE" where email=$1';
    $resultname = pg_query_params($dbconn, $queryname, array($name));
    $finalname = pg_fetch_array($name,null,PGSQL_ASSOC);

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
            $_SESSION["user"] = $finalname;
            $_SESSION["id"] = $email;
            header("location: yourarea.php");
        }
        else{
            header("location: error.php");
        };
    }
?>