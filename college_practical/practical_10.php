<?php
session_start(); // Start the session

if(isset($_SESSION['visits'])){
    $_SESSION['visits']++; // Increment visit count
} else {
    $_SESSION['visits'] = 1; // Initialize first visit
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Visit Counter</title>
</head>
<body>
    <h2>Session-Based Visit Counter</h2>
    <p>
        <?php
        echo "You have visited this page <b>" . $_SESSION['visits'] . "</b> times.";
        ?>
    </p>
    <form method="post">
        <input type="submit" name="reset" value="Reset Counter">
    </form>

    <?php
    if(isset($_POST['reset'])){
        session_destroy();
        echo "<p>Counter reset. Reload the page to start again.</p>";
    }
    ?>
</body>
</html>
