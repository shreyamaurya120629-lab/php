<?php
if (isset($_GET['marks'])) {
    $marks = $_GET['marks'];
    if ($marks >= 40) {
        echo "PASS";
    } else {
        echo "FAIL";
    }
} else {
    echo "Please enter marks in the form";
}
?>
