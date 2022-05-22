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
            $dbconn = pg_connect("host=postgresql port=5432
            dbname=lunappark user=extreemedev password=example");
            $email = $_POST["email"];
            $query = 'SELECT * FROM public."UTENTE" where email=$1';
            $result = pg_query_params($dbconn, $query, array($email));
            if($tuple=pg_fetch_array($result,null,PGSQL_ASSOC)) {
                echo"La registrazione non e' andato a buon fine";
                echo"Nel nostro sistema essiste già un account con questa email";
            }
            else {
                $nome = $_POST["nome"];
                $cognome = $_POST["cognome"];
                $telefono = $_POST["tel"];
                $datanasc = $_POST["data"];
                $password = md5($_POST["password"]);
                $query2 = 'INSERT into public."UTENTE" values ($1,$2,$3,$4,$5,$6)';
                $result = pg_query_params($dbconn, $query2, array($email, $nome, $cognome, $password, $telefono, $datanasc));
                if($result) {
                    echo"La registrazione e' andata a buon fine \n";
                    echo"Clicca <a href=\"../login/index.html\"> qui </a>  per loggarti";
                }
                else die("C'e' stato un errore");
            }
        }
    ?>
    
</body>
</html>