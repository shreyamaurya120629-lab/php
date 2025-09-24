<?php
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($email) || empty($password)) {
    echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
    echo "<a href='register.html'>Go back to Registration Form</a>";
    exit;
}

echo "<h2>Registration Successful</h2>";
echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";
?>
