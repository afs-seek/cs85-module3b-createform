<?php
/*
Nedra Lindsey
Module 3B - Create Form
GitHub: https://github.com/YOUR-USERNAME/cs85-module3b-createform
 */
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
        
        <label for="message">Message (50-150 words):</label><br>
        <textarea id="message" name="message" rows="5" cols="50" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Send Message">
    </form>
</body>
</html>