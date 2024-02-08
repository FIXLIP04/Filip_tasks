<?php
$servername = "db"; // Replace with your MySQL server hostname
$username = "crud_app";     // Replace with your MySQL username
$password = "pass1234";     // Replace with your MySQL password
$dbname = "crud_app";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>