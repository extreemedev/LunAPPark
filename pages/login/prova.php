<?php
    session_start();
    $dbconn = pg_connect("host=postgresql port=5432
    dbname=lunappark user=extreemedev password=example");
    $email = $_SESSION["id"];
    echo($email);
    $querydate = 'SELECT data FROM public."BIGLIETTO" where email=$1';
    echo ($querydate);
    $resultdate = pg_query_params($dbconn, $querydate, array($email));
    echo ($resultdate);
    $finaldate = pg_fetch_array($resultdate,null,PGSQL_NUM);
    echo ($finaldate);
    

    /*
    $query = 'SELECT * FROM public."UTENTE" where email=$1';
    $result = pg_query_params($dbconn, $query, array($email));
    if(!($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
        header("location: index.php?valid=mail");
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
            header("location: index.php?valid=pw");
        };
    }
    /*
?>