<?php
$fruits=array(
"Banana"=>40,
"Papaya"=>50,
"Grapes"=>20,
"Orange"=>70,
"Mango"=>80);
echo"<h3>Original Array</h3>";
print_r($fruits);
asort($fruits);
echo"<h3>asort Array</h3>";
print_r($fruits);
ksort($fruits);
echo"<h3> ksort Array</h3>";
print_r($fruits);
?>