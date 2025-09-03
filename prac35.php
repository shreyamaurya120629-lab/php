<?php
// Associative array of countries and capitals
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Germany" => "Berlin"
);

// Value (capital) to search
$searchCapital = "Tokyo";

// Search using array_search()
$country = array_search($searchCapital, $countries);

if ($country !== false) {
    echo "The capital '$searchCapital' belongs to country: $country";
} else {
    echo "The capital '$searchCapital' was not found in the array.";
}
?>