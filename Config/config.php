<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/Modules/sqlfill/sqlfill.php';

    global $APP_SECRET;
    $APP_SECRET = "AppSecretHere"; // not really needed in this project but why not?
    
    global $sql;
    $host = "localhost";
    $user = "root";
    $pass = "MyS3cretPassw0rd";
    $dbname = "lazycrypto";
    $sql = new SQLFill($host, $user, $pass, $dbname);
   
?>
