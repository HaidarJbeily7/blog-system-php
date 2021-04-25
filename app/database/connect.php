<?php

$host = "localhost:3307";
$username1 = 'root';
$password1 = ''; 
$DataBaseName ='blog';

$conn = new mysqli($host, $username1, $password1, $DataBaseName);

if($conn->connect_error)
{
    die("Database connection error: ". $conn->connect_error);
}

// echo "Successful Connection";
