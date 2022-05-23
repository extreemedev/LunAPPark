<?php

$dbconn = pg_connect("host=postgresql port=5432
            dbname=lunappark user=extreemedev password=example");

            if($dbconn){
              echo"Mi sono connesso!";
            }
            else
              echo"Non mi sono connesso!";

?>