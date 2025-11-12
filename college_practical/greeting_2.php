

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personilzed greeting</title>
</head>
<body>

    <h2> Enter your details </h2>
    <form action="post">

        <label for="name"> enter your name :</label>
        <input  id="name"type="text" name="username" placeholder=" your name " required><br> <br>
        <label for="greet"> enter your greetimg:</label>
        <input  id="greet" type="text" name="greeting" placeholder=" good moring/ hello/ hi " required><br><br>
        <input type="submit" value="submit">

    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=htmlspecialchars($_POST['username']);
        $greet=htmlspecialchars($_POST['greet']);

        echo " <h3> $greet , $name! welcome to php programing .</h3>";
    }
    ?>

</body>
</html>