<?php

$servername = "localhost";  // usually the localhost 

$usename = "root"; //mysql user name 

$password = "Prem@8462088259";  // set by me 

$database = "my_database";  // name of data base 

//  created connection 
$conn = new mysqli($servername,$usename,$password,$database );

//check connection 
if($conn->connect_error){
    die("connection failed ".$conn->connect_error);
}else{
    echo " connection successfully ";
}





?>