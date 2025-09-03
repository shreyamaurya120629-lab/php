<?php
// Array create karo
$numbers = array(10, 20, 30, 40, 50);

// Check karne ke liye value
$search = 30;

// in_array() function ka use
if (in_array($search, $numbers)) {
    echo "Value $search exists in the array.";
} else {
    echo "Value $search does not exist in the array.";
}
?>