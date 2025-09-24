<?php
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    echo "Your favorite programming language is: " . $lang;
} else {
    echo "Please select a language.";
}
?>
