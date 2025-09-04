<?php
$numbers = array(45, 12, 89, 33, 67, 5, 99);

echo "<h3>Original Array:</h3>";
print_r($numbers);

sort($numbers);
echo "<h3>Ascending Order using sort :</h3>";
print_r($numbers);

rsort($numbers);
echo "<h3>Descending Order using rsort :</h3>";
print_r($numbers);
?>
