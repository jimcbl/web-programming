<?php
$server_name = "localhost";
$server_username = "root";
$server_password = "newpassword";
$server_database = "mydb";

// Create connection
$conn = new mysqli($server_name, $server_username, $server_password, $server_database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
