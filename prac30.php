<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Australia" => "Canberra"
);

echo "List of Countries and their Capitals:<br>";
foreach ($countries as $country => $capital) {
    echo "Country: " . $country . " - Capital: " . $capital . "<br>";
}
?>