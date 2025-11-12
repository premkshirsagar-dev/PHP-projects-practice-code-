<?php

include 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $password= password_hash($_POST['password']);
    $email=$_POST['email'];

$stmt= $conn-> prepare(" INSERT INTO user (name,email,password) value (?,?,?) " );
$stmt-> bind_param("sss",$name,$email,$password);

if($stmt->execute()){
    echo" user register successfully !!!!!!! ";
}else{
    echo " error :".$stmt->error;
}

$stmt->close();
}

$conn->close();

?>