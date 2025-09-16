.<?php
// Check if both name and age are provided in the URL
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']); // सुरक्षा के लिए
    $age  = (int) $_GET['age']; // age को integer में बदलना
    
    echo "Hello " . $name . ", you are " . $age . " years old.";
} else {
    echo "Please provide your name and age in the URL.";
}
?>