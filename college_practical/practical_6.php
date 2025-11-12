<?php
function generatePassword($length = 12) {
    $characters = '11112222223333344444556677777788899999999000';
    $charactersLength = strlen($characters);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $password;
}

$password = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST["length"];

    // ✅ Validation with logical operators
    if (empty($length) || !is_numeric($length)) {
        $error = "Please enter a valid number for password length.";
    } elseif ($length < 4 || $length > 50) {
        $error = "Password length must be at least 4 and not more than 50.";
    } elseif (!($length >= 1 && $length <= 50)) {
        // Same condition written with AND
        $error = "Invalid length! Must be between 4 and 50.";
    } else {
        $password = generatePassword((int)$length);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>

</head>
<body>

<h2>Random Password Generator 🔑</h2>

<form method="post">
    <label for="length">Enter Password Length:</label>
    <input type="text" id="length" name="length" min="1" required>
    <input type="submit" value="Generate">
</form>

<?php if (!empty($error)) : ?>
    <div class="error"><?= htmlspecialchars($error) ?></div>
<?php elseif (!empty($password)) : ?>
    <div class="re 0000bnsult">Generated Password: <?= htmlspecialchars($password) ?></div>
<?php endif; ?>

</body>
</html>
