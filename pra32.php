<?php

$students = array(
    "Rashu" => 85,
    "Sonu" => 92,
    "Amit" => 98,
    "Goldi" => 95
);

echo "<h3>Original Array:</h3>";
print_r($students);


$students["Goldi"] = 88; 

echo "<h3>changed array :</h3>";
print_r($students);
?>