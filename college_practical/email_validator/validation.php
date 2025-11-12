<?php
// ----------------------------
// EMAIL VALIDATOR - PHP SCRIPT
// ----------------------------

// 1️⃣ Get user input
$email = trim($_POST['email'] ?? '');

// 2️⃣ Basic syntax validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("<h3>❌ Invalid email format!</h3>");
}

// 3️⃣ Extract domain
list($user, $domain) = explode('@', $email);
echo "<h3>🔎 Checking: <b>$email</b></h3>";
echo "<p>Domain: <b>$domain</b></p>";

// 4️⃣ Check for disposable domains (if list exists)
$disposable_file = "disposable.txt";
if (file_exists($disposable_file)) {
    $disposables = file($disposable_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (in_array(strtolower($domain), array_map('strtolower', $disposables))) {
        echo "<p style='color:red;'>⚠️ This domain is from a disposable email provider.</p>";
    }
}

// 5️⃣ Check if domain has MX record (means it can receive email)
if (checkdnsrr($domain, "MX")) {
    echo "<p>✅ MX record found — domain can receive emails.</p>";
} elseif (checkdnsrr($domain, "A")) {
    echo "<p>⚠️ No MX record, but domain has an A record — may still accept emails.</p>";
} else {
    exit("<p>❌ Invalid domain: cannot find mail servers for this domain.</p>");
}

// 6️⃣ (Optional) SMTP check — attempts to connect to mail server (safe check)
function smtp_verify($email, $domain) {
    getmxrr($domain, $mxhosts);
    if (empty($mxhosts)) return "❌ No MX servers found.";

    $mx = $mxhosts[0];
    $from = "check@example.com";
    $fp = @fsockopen($mx, 25, $errno, $errstr, 5);
    if (!$fp) {
        return "⚠️ Cannot connect to SMTP server ($mx).";
    }

    stream_set_timeout($fp, 5);
    fwrite($fp, "HELO example.com\r\n");
    fwrite($fp, "MAIL FROM:<$from>\r\n");
    fwrite($fp, "RCPT TO:<$email>\r\n");
    fwrite($fp, "QUIT\r\n");
    fclose($fp);
    return "✅ SMTP connection test passed (server reachable).";
}

echo "<p>" . smtp_verify($email, $domain) . "</p>";

// 7️⃣ (Optional) Check for known providers
$providers_file = "known_providers.json";
if (file_exists($providers_file)) {
    $providers = json_decode(file_get_contents($providers_file), true);
    if (in_array(strtolower($domain), array_map('strtolower', $providers))) {
        echo "<p> Known provider: <b>$domain</b> (Trusted domain)</p>";
    }
}

echo "<p style='color:green;'><b>✅ Email validation complete!</b></p>";
?>
