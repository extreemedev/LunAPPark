<?php
    if(!isset($_POST["signupButton"])) {
        header("location: index.html");
    }
    else{
        $dbconn = pg_connect("host=database port=5432
        dbname=lunappark user=admin password=example");
        $email = $_POST["email"];
        $query = 'SELECT * FROM UtenteRegistrato WHERE user_mail=$1';
        $result = pg_query_params($dbconn, $query, array($email));
        if($tuple=pg_fetch_array($result,null,PGSQL_ASSOC)) {
            echo"Nel nostro sistema esiste già un account con questa email";
            header("location: index.php?valid=mail");
        }
        else {
            $cf = $_POST["cf"];
            $nome = $_POST["nome"];
            $cognome = $_POST["cognome"];
            $telefono = $_POST["tel"];
            $datanasc = $_POST["data"];
            $password = md5($_POST["password"]);
            $query2 = 'INSERT INTO UtenteRegistrato VALUES ($1,$2,$3,$4,$5,$6,$7)';
            $result = pg_query_params($dbconn, $query2, array($cf, $nome, $cognome, $datanasc, $telefono, $email, $password));
            if($result) {
                header("location: index.php?valid=ok");
            }
            else{
                header("location: index.php?valid=db");
            };
        }
    }
?>