<?php
if (isset($_GET['name'])) {
    $nm = $_GET['name'];
    echo "<h3>Thank you $nm, we will get back to you shortly</h3>";
} else {
    echo "<p style='color:red;'>No name received!</p>";
}
?>
