<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "prem";
$port = 3306; // replace if your port is different

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";


    $id = $_POST['i_d'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $rolln = $_POST['rolln'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    $sql = "INSERT INTO student (id, name, age, rolln, phone, address, course)
            VALUES ('$id', '$name', '$age', '$rolln', '$phone', '$address', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "✔ New student added successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }

?>