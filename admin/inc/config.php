<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone IN MANILA
date_default_timezone_set('Asia/Manila');

// Host Name
$dbhost = 'localhost';

// Database Name
<<<<<<< HEAD
$dbname = 'hohosan';
=======
$dbname = 'aicomdatabase';
>>>>>>> 83b1e762d57ca68568e08d5e86fb7d759ad07c33

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// Defining base url
define("BASE_URL", "");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
    // Creating PDO connection
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // Setting PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error :" . $exception->getMessage();
}
