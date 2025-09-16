<head>
    <title>Thank You</title>
</head>
    <?php
        if (isset($_GET['name'])) {
            $name = htmlspecialchars($_GET['name']);  
            echo "<h2>Thank you $name, we will contact you soon!</h2>";
        } else {
            echo "<h2>Thank you, we will contact you soon!</h2>";
        }
    ?>
