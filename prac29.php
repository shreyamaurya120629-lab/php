<?php
// Array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

echo "Original Array:<br>";
print_r($numbers);
echo "<br><br>";

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

echo "Array after removing duplicates (using array_unique()):<br>";
print_r($uniqueNumbers);
?>