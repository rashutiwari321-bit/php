<?php
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes", "Pineapple");
echo "Array: <br>";
print_r($fruits);
echo "<br><br>";
echo "Array in Reverse Order without using array_reverse(): <br>";
for ($i = count($fruits)-1; $i>=0; $i--) {
    echo $fruits[$i] . " ";
}
echo "<br><br>";
echo "Array in Reverse Order using array_reverse(): <br>";
$reverseArray = array_reverse($fruits);
print_r($reverseArray);
?>