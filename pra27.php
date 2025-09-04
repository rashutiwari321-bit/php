<?php

$numbers = array(45, 12, 67, 89, 34, 23, 10);
echo "Original Array: <br>";
print_r($numbers);
echo "<br><br>";
sort($numbers);
echo "Array in Ascending Order (sort()): <br>";
print_r($numbers);
echo "<br><br>";
rsort($numbers);
echo "Array in Descending Order (rsort()): <br>";
print_r($numbers);
?>