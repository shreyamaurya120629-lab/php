<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "Welcome, " . htmlspecialchars($name);
} else {
    echo "Please enter your name in the form.";
}
?>
