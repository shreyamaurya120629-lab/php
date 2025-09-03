<?php
// Associative array of fruits and prices
$fruits = array(
    "Apple" => 120,
    "Banana" => 40,
    "Mango" => 100,
    "Orange" => 80,
    "Grapes" => 60
);

echo "Original Array:<br>";
print_r($fruits);
echo "<br><br>";

// Sort by values (prices) - Ascending
asort($fruits);
echo "Array sorted by Values (Prices) using asort():<br>";
print_r($fruits);
echo "<br><br>";

// Sort by keys (fruit names) - Ascending
ksort($fruits);
echo "Array sorted by Keys (Fruit Names) using ksort():<br>";
print_r($fruits);
?>