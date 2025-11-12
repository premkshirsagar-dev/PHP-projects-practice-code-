<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rectangular area calculate </title>
</head>
<body>
    <h2> Rectangular area calculate </h2>

<form method="post">

    <label for="1"> Enter the langht :</label>
    <input type="number"  id="1" name="langht" required>
    <br> <br>
    <label for="2"> Enter the widht :</label>
    <input type="number"  id="2" name="widht" required>
    <br> <br>
    <input type="submit" value="Calculate the area">

</form>
<?php


if($_SERVER["REQUEST_METHOD"] =="POST"){
    
    $lenght=$_POST['langht'];
    $width=$_POST['widht'];
    $area= $lenght*$width;
   echo "  The area of tranguler is $area ";
   $area=0;
}
?>
</body>
</html>