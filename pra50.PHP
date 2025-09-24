<?php
$theme = "light";
if (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie("site_theme", $theme, time() + (7 * 24 * 60 * 60), "/");
} elseif (isset($_COOKIE['site_theme'])) {
    $theme = $_COOKIE['site_theme'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
    <style>
        body.light {
            background-color: #ffffff;
            color: #000000;
            font-family: Arial, sans-serif;
        }
        body.dark {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .light-btn { background-color: #f0f0f0; color: #000; }
        .dark-btn { background-color: #333; color: #fff; }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h2>Welcome! Current Theme: <?php echo ucfirst($theme); ?> Mode </h2>

    <form method="post">
        <button type="submit" name="theme" value="light" class="btn light-btn">Light Mode</button>
        <button type="submit" name="theme" value="dark" class="btn dark-btn">Dark Mode</button>
    </form>
</body>
</html>
