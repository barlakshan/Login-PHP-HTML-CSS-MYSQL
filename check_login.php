<?php
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('location: dashboard.php');
} else {
    header('location: rederect.php');
}

$conn->close();
?>