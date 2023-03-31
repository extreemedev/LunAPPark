<?php
    $dbconn = pg_connect("host=database port=5432
    dbname=lunappark user=admin password=example");
    $email = $_POST["inputEmail"];

    $queryname = 'SELECT nome FROM UtenteRegistrato WHERE user_mail=$1';
    $resultname = pg_query_params($dbconn, $queryname, array($email));
    $finalname = pg_fetch_array($resultname,null,PGSQL_NUM);

    $query = 'SELECT * FROM UtenteRegistrato WHERE user_mail=$1';
    $result = pg_query_params($dbconn, $query, array($email));
    if(!($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
        header("location: index.php?valid=mail");
    }
    else {
        $password = md5($_POST["inputPassword"]);
        $query2 = 'SELECT * FROM UtenteRegistrato WHERE user_mail=$1 and user_password=$2';
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
?>