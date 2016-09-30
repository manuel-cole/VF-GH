<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Contact: 0509617500
 * Date: 18/09/2016
 * Time: 22:24
 */
$servername = "localhost";
$username = "cdr";
$password = "cdr";
$dbase = "cdr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
