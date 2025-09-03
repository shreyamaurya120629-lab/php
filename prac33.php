<?php
// Associative array of students and marks
$students = array(
    "Rahul" => 85,
    "Sneha" => 92,
    "Aman" => 78,
    "Priya" => 88,
    "Karan" => 95
);

// Key to search
$searchKey = "Aman";

// Check key using array_key_exists()
if (array_key_exists($searchKey, $students)) {
    echo "Key '$searchKey' exists in the array with value = " . $students[$searchKey];
} else {
    echo "Key '$searchKey' does not exist in the array.";
}
?>