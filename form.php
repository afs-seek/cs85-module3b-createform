<?php
/*
Nedra Lindsey
Module 3B - Create Form
GitHub: https://github.com/YOUR-USERNAME/cs85-module3b-createform

Output predictions: The basic HTML form will show, requesting information from user. User will submit information and the confirmation of receipt will appear on the screen.

What do I expect to see in $_POST: I should see fullName, email, topic, and a message.

Reflections: It's important to sanitize the output so that the site is no vulnerable to attack.


 */

$showForm = true;
$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $fullName = htmlspecialchars($_POST['fullName'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $topic = htmlspecialchars($_POST['topic'], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
    
    
    $wordCount = str_word_count($message);
    if ($wordCount < 5 || $wordCount > 150) {
        $errors[] = "Please leave a message between 5 and 150 words. (You wrote $wordCount words)";
    }
    
      if (empty($errors)) {
        $showForm = false;
        echo "<p>Thanks, $fullName.</p>";
        echo "<p>I got your information about $topic.</p>";
        echo "<p>I'll respond to you at $email.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Module 3B - Contact Form</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Send Us a Message</h2>
    
    <form action="" method="POST">
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullName" required><br><br>
        
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="topic">Favorite Houseplant:</label><br>
        <input type="text" id="topic" name="topic" required><br><br>
        
        <label for="message">Message (5-150 words):</label><br>
        <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Send Message">
    </form>
</body>
</html>