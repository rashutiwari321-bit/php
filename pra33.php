<?php
$students = array(
    "Ravi" => 85,
    "Sita" => 92,
    "Amit" => 78,
    "Neha" => 95
);
$searchKey = "Sita";
//$searchKey = "Sonu";
if (array_key_exists($searchKey, $students)) {
    echo " '$searchKey' exists in the array with value: " . $students[$searchKey];
} else {
    echo "'$searchKey' does not exist in the array.";
}
?>