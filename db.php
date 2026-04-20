<?php
/* Database connection settings */
$host = "localhost";
$dbname = "batwise_cricket";
$username = "root";
$password = "";

/* Create a new MySQLi connection */
$conn = new mysqli($host, $username, $password, $dbname);

/* Check if the connection is successful */
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* Set the character encoding */
$conn->set_charset("utf8mb4");
?>