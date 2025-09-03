<?php
// Existing associative array
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

echo "Original Array:<br>";
print_r($countries);
echo "<br><br>";

// Add new key-value pair
$countries["Germany"] = "Berlin";

echo "Array after adding Germany:<br>";
print_r($countries);
?>