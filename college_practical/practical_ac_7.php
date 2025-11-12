
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
// Get email and remove spaces
$email = trim($_POST['email'] ?? '');
}
$pattern = '/^[A-Za-z0-9][A-Za-z0-9._]*@gmail\.com$/';


// // 1️⃣ Check if email format is valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "❌ Invalid email format.";
}
// 2️⃣ Regex check: 
// - Starts with a letter or number (no space or dot at start)
// - Can contain letters, numbers, dots, underscores before @
// - Must end with '@gmail.com'

if (preg_match($pattern, $email)) {
    echo "✅ Valid Gmail email address: $email";
} else {
    echo "❌ Invalid email. Make sure:\n";
    echo "- No space or dot at the start\n";
    echo "- Must end with @gmail.com\n";
    echo "- Format should be like: name123@gmail.com";
}

?>

