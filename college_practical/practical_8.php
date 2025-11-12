<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial NUMBER </title>
</head>

<body>

    <h2>  Factorial number   </h2>
    <div>

           <form method="post" action="">
            <label for="factorial"> Entre the Number to find out the factorial </label>
            <br><br>
            <input type="number" id="factorial" name="number" required><br><br>
          <input type="submit" value="click">
    </div>

    </form>
    </div>
</body>

</html>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['number'])){

            $number=$_POST['number'];

         if(!is_numeric($number) || $number<=0){
            echo " enter the correct number ";
         }
         else
         {
            $fact=1;
         for($i=1;$i<=$number;$i++){
            $fact=$fact*$i;
         }
         echo " the factorial Of given number is ".$fact;

        }
        }

}

?>