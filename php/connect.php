<?php

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "basic";

    $conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8",$userName,$userPassword);
    
?>