<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hohosan";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("<script>alert('Connection failed: " . $conn->connect_error . "')</script>");
}