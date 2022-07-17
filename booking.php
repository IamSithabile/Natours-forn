<?php 

// connecting to the database

$servername="localhost";
$username="root";
$password="";

try {
    //create a database connection

    $conn= new PDO("mysql:host $servername; dbname:testDB", $username, $password);

    //error handling section
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected succesfully";
} catch (PDOException $e) {
    echo "Connection failed: " .$e->getMessage(); 
}