<?php
session_start();

// Hardcoded credentials
$valid_username = "prem";
$valid_password = "12345";

$error = "";

// Logout if requested
if (isset($_GET['action']) && $_GET['action'] === "logout") {
    session_destroy();
    header("Location: login.php");
    exit();
}

// If form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login (Single File)</title>
</head>
<body>
<?php if (isset($_SESSION['username'])): ?>
    <!-- Welcome Page -->
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 🎉</h2>
    <p>You are logged in successfully!</p>
    <a href="?action=logout">Logout</a>

<?php else:    ?>
    <!-- Login Page -->
    <h2>Login Page</h2>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>


        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
<?php endif; ?>
</body>
</html>
