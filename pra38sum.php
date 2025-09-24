<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];
    $sum = $n1 + $n2;
    echo "Sum = " . $sum;
} else {
    echo "Please enter numbers in the form.";
}
?>
