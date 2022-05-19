<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_POST["signupButton"])) {
            header("Location: index.html");
        }
        else{
            $dbconn = pg_connect("host=localhost port=5432
            dbname=lunappark user=extreemedev password=example");
            $email = $_POST["email"];
            $query = "SELECT * FROM utente where email=$1";
            $result = pg_query_params($dbconn, $query, array($email));
            if(!($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                echo"la registrazione non e' andato a buon fine";
                echo"Nel nostro sistema essiste già un account con questa email";
                echo"La registrazione non e' andato a buon fine";
                echo"Clicca <a href=\"index.html\"> qui </a>  per loggarti";
            }
            else {
                $nome = $_POST["nome"];
                $cognome = $_POST["cognome"];
                $telefono = $_POST["tel"];
                $datanas = $_POST["data"];
                $password = md5($_POST["password"]);
                $query2 = "INSERT into UTENTE values ($1,$2,$3,$4,$5,$6)";
                $result = pg_query_params($dbconn, $query2, array($nome, $cognome, $email, $password, $telefono, $datanas));
                if($result) {
                    echo"La registrazione e' andato a buon fine";
                    echo"Clicca <a href=\"index.html\"> qui </a>  per loggarti";
                }
                else die("c'e' stato un errore");
            }
        }
    ?>
    
</body>
</html>