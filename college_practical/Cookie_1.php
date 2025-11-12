<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
      <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f2f2f2;
        }
        h2 { color: #333; }
        .box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
        }
        button {
            margin: 5px;
            padding: 10px 15px;
            border: none;
            background: #007BFF;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover { background: #0056b3; }
        .result {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style> -->
</head>
<body>

<h2>Cookie Management with User Input</h2>

<form method="post">
    Enter your name: <input type="text" name="username" required>
    <input type="submit" name="setcookie" value="Save Cookie">
</form>

<form method="post">
    <input type="submit" name="getcookie" value="Show Cookie">
    <input type="submit" name="deletecookie" value="Delete Cookie">
</form>
                                                
<hr>

<?php
$cookie_name = "user";

// ----- SET COOKIE -----
if (isset($_POST['setcookie'])) {
    $cookie_value = $_POST['username'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 1 day
    echo "Cookie has been set 
    with value: " . htmlspecialchars($cookie_value);
}

// ----- GET COOKIE -----
elseif (isset($_POST['getcookie'])) {
    if (isset($_COOKIE[$cookie_name])) {
        echo "Welcome, " . htmlspecialchars($_COOKIE[$cookie_name]) . "!";
    } else {
        echo "No cookie found!";
    }
}

// ----- DELETE COOKIE -----
elseif (isset($_POST['deletecookie'])) {
    setcookie($cookie_name, "", time() - 3600, "/"); // Expired
    echo "Cookie has been deleted.";
}
?>

</body>
</html>

  