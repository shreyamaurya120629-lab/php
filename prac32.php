<?php
$students = array(
    "Rahul" => 85,
    "Sneha" => 92,
    "Aman" => 78,
    "Priya" => 88,
    "Karan" => 95
);

echo "Original Students and Marks:<br>";
print_r($students);
echo "<br><br>";

$students["Aman"] = 90;

echo "Array after updating Aman's marks:<br>";
print_r($students);
?>