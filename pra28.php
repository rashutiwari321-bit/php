<?php
$colors = array("Red", "Green", "Blue", "Yellow", "Black");
$checkValue = "Green";
if (in_array($checkValue, $colors)) {
    echo "$checkValue exists in the array.";
} else {
    echo "$checkValue does not exist in the array.";
}
?>