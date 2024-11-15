<?php
// config.php

$servername = "localhost";  // Your server name (e.g., localhost)
$username = "root";         // Your database username
$password = "";             // Your database password
$dbname = "angels_cafe";    // Your database name (now using angels_cafe)

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
