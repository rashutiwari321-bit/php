

    <hr>
    <?php
    if (isset($_GET['marks'])) {
        $marks = (int) $_GET['marks']; // marks को integer में बदलना

        if ($marks >= 40) {
            echo "<h3 style='color:green;'>PASS</h3>";
        } else {
            echo "<h3 style='color:red;'>FAIL</h3>";
        }
    }
    ?>