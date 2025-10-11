<?php
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    // Store cookie for 1 day
    setcookie("username", $name, time() + 86400, "/");
    echo "Hello, " . htmlspecialchars($name) . "! Your name has been saved.<br>";
} else {
    if (isset($_COOKIE['username'])) {
        $name = $_COOKIE['username'];
        echo "Welcome back, " . htmlspecialchars($name) . "!";
    } else {
        ?>
        <form method="post">
            Enter your name: <input type="text" name="username" required>
            <input type="submit" value="Submit">
        </form>
        <?php
    }
}
?>