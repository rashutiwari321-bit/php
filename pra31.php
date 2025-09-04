<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo"
);
echo "<h3> Array:</h3>";
print_r($countries);
$countries["Germany"] = "Berlin";
echo "<h3>New Array :</h3>";
print_r($countries);
?>
