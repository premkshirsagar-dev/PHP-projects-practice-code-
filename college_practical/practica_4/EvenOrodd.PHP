<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Or odd </title>
</head>
<body>
    <h3> checks even or odd number </h3>
    <form method="post">
        <input type="number"  placeholder="Enter the number"  name="number" required>
        <br><br>
        <button type="submit">check</button>
        <button type="reset">clear</button>

        
    </form>
    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['number'])){
            $number=$_POST['number'];
        
            if(!is_numeric($number)){
                echo " enter the correct value ";
            }
            if($number%2==0){
                echo" given Number $number Is even :";
            }

        else{
                echo" given Number $number Is odd:";
        }

        }
    }

    ?>
</body>
</html>  