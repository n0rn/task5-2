<?php

    function db_connect() {
        $dsn = "mysql:host=localhost; dbname=task9";
        $user = 'root';
        $password ="";

        $db = new PDO($dsn, $user, $password);
        $db->exec('SET CHARACTER SET  utf8');


        return $db;

    }

    function getChoice($choice){
        $db =  db_connect();
        $dbConnect = $db->query("UPDATE test9 SET counter = counter +1 WHRE id = . $choice ");
        $dbConnect->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDbConnect(){
        $db = db_connect();
        $dbConnect = $db->query("SELECT * FROM test9");
        return $dbConnect->fetchAll(PDO::FETCH_ASSOC);
    }
