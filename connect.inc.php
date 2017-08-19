<?php
$conn_error = "connection failed";

$hostname = "localhost";
$user_name = "root";
$password = "";

// Create connection
$sql_conn = new mysqli($servername, $username, $password);

// Check connection
if ($sql_conn->connect_error) {
    die($conn_error);
} 
echo "Connected successfully";


?>