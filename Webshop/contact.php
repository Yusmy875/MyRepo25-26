<?php include 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MyShop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php renderNav("contact"); ?>
    <section class="content">
        <h1>Contact Us</h1>
        <form class="contact-form" action="#" method="post">
            <label>Name</label>
            <input type="text" name="name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Message</label>
            <textarea name="message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php
        var_dump($_GET);
        
        ?>
    </section>
    <footer>
        <p>&copy; 2025 MyShop. All rights reserved.</p>
    </footer>
</body>

</html>