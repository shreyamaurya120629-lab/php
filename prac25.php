<?php
// Indexed array create karo
$numbers = array(25, 10, 85, 40, 60);

// Largest aur smallest nikalna (manual method)
$largest = $numbers[0];
$smallest = $numbers[0];

foreach ($numbers as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
    if ($num < $smallest) {
        $smallest = $num;
    }
}

// Array print karna
echo "Array Elements: ";
print_r($numbers);
echo "<br><br>";

// Result print karna
echo "Largest Number = " . $largest . "<br>";
echo "Smallest Number = " . $smallest . "<br>";

// Shortcut Method (built-in functions)
echo "<br>Using PHP functions:<br>";
echo "Largest Number = " . max($numbers) . "<br>";
echo "Smallest Number = " . min($numbers) . "<br>";
?>