<?php

$servername = "localhost";
$username = "prem";
$password = "prem";
$database ="prem";
$port ="3307";

// Create connection
$conn = new mysqli($servername, $username, $password,$database,$port);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// echo" success connecting to the db";
$id=$_POST['i_d'];
$name =$_POST['name']; 
$age =$_POST['age']; 
$rolln =$_POST['rolln']; 
$phone =$_POST['phone']; 
$address =$_POST['address']; 
$course =$_POST['course'];

 $sql="INSERT INTO `student` ( `id`,`name`, `age`, `rolln` ,`phone` ,`address`, `course`)
 VALUES ('$id','$name', '$age', '$rolln', '$phone', '$address', '$course')";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_information</title>
    <link rel="stylesheet" href="stlye.css">
</head>
<body>
  
    <div class="container">
        <h2 class="heading">Wellcome to the Students information page </h2>
        <p> In below fill your all basic information then we consider your as a approvel student </p>
        <hr id="line">
           <div class="input-from">
             <form action="index.php" method="POST">
              
                <label for="i_d">i_d:</label>
                <input id="name" name="i_d" class="Name" type="text" placeholder="Enter your id " required>
                 
                <label for="name">Name:</label>
                <input id="name" name="name" class="Name" type="text" placeholder="Enter your name... 'saniya' " required>
                  
                <label for="age">Age:</label>
                <input id="age" type="text"  name="age" placeholder="Enter your Age... '19' " required>

                <label for="roll.n">Roll n:</label>
                <input id="roll.n"  class="Roll-n"  name="rolln" type="number"  placeholder="Enter your Roll n... '6219623' " required>
               
                <label for="address">Address:</label>
                <input id="address" type="text" name="address" placeholder="Enter your Address...'Tekdi ward' " required>

                <label for="phone">Phone n.</label>
                <input id="phone" type="tel" name="phone" placeholder="Enter your Number... '7564474827' " required>

                <label for="coures">Course:</label>
                <input id="coures" name="course" type="text" placeholder="Enter your course... 'BCA' " required>
 
                <button id="submit">Submit</button>
             </form>

            </div>
    </div>
    
</body>
</html>
