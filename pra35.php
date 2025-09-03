<?php
// Associative array of countries with their capital cities
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Germany" => "Berlin"
);

// Value to search (capital city)
$searchCapital = "Tokyo";
$searchCapital = "New Delhi";
// Using array_search() 
$country = array_search($searchCapital, $countries);

if ($country !== false) {
    echo "The capital '$searchCapital' belongs to country: $country";
} else {
    echo "Capital '$searchCapital' not found in the array.";
}
?>
