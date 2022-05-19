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
        if(!isset($_POST["loginButton"])) {
            header("Location: index.html");
        }
        else{
            $dbconn = pg_connect("host=localhost port=5432
            dbname=lunappark user=extreemedev password=example");
            $email = $_POST["inputEmail"];
            $query = "SELECT * FROM utente where email=$1";
            $result = pg_query_params($dbconn, $query, array($email));
            if(!($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                echo"il login non e' andato a buon fine";
            }
            else {
                $password = md5($_POST["inputPassword"]);
                $query2 = "SELECT * FROM utente where email=$1 and paswd=$2";
                $result = pg_query_params($dbconn, $query2, array($email, $password));
                if(($tuple=pg_fetch_array($result,null,PGSQL_ASSOC))) {
                    echo"il login e' andato a buon fine";
                }
                else die("c'e' stato un errore");
            }
        }
    ?>
    
</body>
</html>