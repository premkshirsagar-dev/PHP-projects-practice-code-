<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = trim($_POST['name'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $mobile = trim($_POST['mobile'] ?? '');
    $course = trim($_POST['course'] ?? '');

    // Basic validation
    if ($name === '' || $email === '') {
        die('Name and Email are required.');
    }

    $stmt = $conn->prepare("INSERT INTO students (name, email, mobile, course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobile, $course);

    if ($stmt->execute()) {
        echo "Record inserted. <a href='index.html'>Add another</a> | <a href='read.php'>View all</a>";
    } else {
        echo "Insert error: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    die('Invalid request method.');
}
?>
