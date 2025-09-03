<?php
// Array create karo
$numbers = array(45, 10, 85, 30, 60);

echo "Original Array:<br>";
print_r($numbers);
echo "<br><br>";

// Ascending order using sort()
$asc = $numbers;  // copy array
sort($asc);
echo "Array in Ascending Order (using sort()):<br>";
print_r($asc);
echo "<br><br>";

// Descending order using rsort()
$desc = $numbers;  // copy array
rsort($desc);
echo "Array in Descending Order (using rsort()):<br>";
print_r($desc);
?>