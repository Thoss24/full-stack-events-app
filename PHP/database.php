<?php 
    header('Access-Control-Allow-Origin: http://localhost:3000'); 
    $user = $_POST['name']; 
    echo ("Hello from server: $user"); 

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "events-app";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn) {

    } else {
        die("Database connection failed!");
    }
    
?> 