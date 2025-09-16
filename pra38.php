<?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = (int) $_GET['num1'];  
    $num2 = (int) $_GET['num2']; 
  $sum = $num1 + $num2; 
  echo "<h3>Sum of $num1 and $num2 is: $sum</h3>";
    }
    ?>
