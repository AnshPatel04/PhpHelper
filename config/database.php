<?php

$servername = "localhost";
    $username = 'root';
    $password = '';
    $dbName = 'phpdemo';

    // Create connection

    // Using Object
    $connection = @new mysqli($servername, $username, $password, $dbName);

    // new mysqli($servername, $username, $password, $dbName);

    // Check connection
    if($connection->connect_error){
        echo "Connection failed: ".$connection->connect_error; 
        exit; // die(echo "Connection failed: ".$connection->connect_error);
    }

    // echo "Connection successful";

    
    // array (procedure)
    // $connection = @mysqli_connect($servername, $username, $password, $dbName); 
    // // mysqli_connect($servername, $username, $password, $dbName);

    // if($connection){
    //     echo "Connection successful";

    // }else{
    //     echo "Connection fail : ". mysqli_connect_error();
    // }