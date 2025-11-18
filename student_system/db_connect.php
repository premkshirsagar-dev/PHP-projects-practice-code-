<?php
// db_connect.php
$host = '127.0.0.1';      // use 127.0.0.1 to avoid socket issues
$port = 3306;             // change if your MySQL uses different port
$db   = 'student_system';
$user = 'root';           // your MySQL user
$pass = '';               // your MySQL password

// Create mysqli connection
$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_errno) {
    die("DB Connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

// set charset
$conn->set_charset('utf8mb4');
?>
