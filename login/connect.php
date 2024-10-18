<?php
$host = 'localhost';
$db = 'pkl';
$user = 'root';
$pass = '';

    $conn = new mysqli('$localhost','$root','','$pkl');

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>