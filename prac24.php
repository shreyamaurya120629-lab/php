<?php
// Indexed array create karo
$numbers = array(10, 20, 30, 40, 50);

// Method 1: foreach loop ka use karke sum nikalna
$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

// Array print karna
echo "Array Elements: ";
print_r($numbers);
echo "<br>";

// Sum print karna
echo "Sum of all numbers = " . $sum . "<br>";

// Method 2: Direct PHP built-in function
echo "Sum using array_sum() = " . array_sum($numbers);
?>