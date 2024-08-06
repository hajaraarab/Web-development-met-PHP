<?php
$message = $_SESSION['error'] ?? '';

// if(!empty($message))
// {
//     echo "<div class='message-container'>";
//     echo "<div class='message' role='alert'>"; 
//     echo $message;
//     echo "</div>";
//     echo "</div>";
//     unset($_SESSION['error']);
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <section id="contactform">
    <h2>Contact Us</h2>
    <div id="containerForm">
    <form method="POST" action="#contactform">

        <?php if(!empty($message)): ?>
            <div class='message-container'>
            <div class='message' role='alert'>
                <?= $message; ?>
            </div>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>

        <label for="name">Name:</label>
        <input type="text" id="name" placeholder="Your name" name="name">

        <label for="email">Email:</label>
        <input type="text" id="email" placeholder="Your email" name="email">

        <label for="message">Message:</label>
        <textarea id="message" placeholder="Your message" rows="6" name="message"></textarea>

        <button type="submit" class="formButton">Send message</button>
    </form>
</div>
</form>
</body>
</html>