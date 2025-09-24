<?php
$cookie_name = "discount_offer";
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, "active", time() + 600, "/");
    $show_offer = true; 
} else {
    $show_offer = false; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Limited Time Offer</title>
</head>
<body>
    <?php if ($show_offer): ?>
        <p style="color: green; font-weight: bold;">
             Welcome! You get <strong>10% OFF</strong> (valid for 10 minutes).
        </p>
    <?php else: ?>
        <p style="color: red;">
             Sorry! The 10% discount offer has expired.
        </p>
    <?php endif; ?>
</body>
</html>
