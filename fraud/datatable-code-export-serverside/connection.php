<?php
/* Database connection start */
$servername = "localhost";
$username = "fraud";
$password = "fraud";
$dbase = "fraud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>