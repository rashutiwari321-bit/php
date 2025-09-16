<head>
    <title>Contact Form</title>
</head>
    <h2>Contact Us</h2>
    <form action="thankyou.php" method="GET">
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" cols="30" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>

