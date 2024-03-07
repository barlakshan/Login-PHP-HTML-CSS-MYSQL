<?php
$servername = "localhost";
$username = "root";
$password = ""; // If root has no password, keep it empty
$dbname = "login_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
