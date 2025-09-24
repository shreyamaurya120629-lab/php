<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operation'];

    switch ($op) {
        case '+': echo "Result = " . ($n1 + $n2); break;
        case '-': echo "Result = " . ($n1 - $n2); break;
        case '*': echo "Result = " . ($n1 * $n2); break;
        case '/': 
            if ($n2 != 0) echo "Result = " . ($n1 / $n2); 
            else echo "Cannot divide by zero!";
            break;
        default: echo "Invalid operation.";
    }
} else {
    echo "Please enter values in the form.";
}
?>
