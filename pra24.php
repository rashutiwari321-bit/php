<?php
$number= array(10,20,30,40,50);
$sum=0;
foreach($number as $value){
    $sum+=$value;

}
echo"Sum of array element using foreach =".$sum."<br>";
$total=array_sum($number);
echo"Sum of array element using array_sum =".$total;
?>