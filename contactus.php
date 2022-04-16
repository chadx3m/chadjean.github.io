<!DOCTYPE html>
<?php
  include 'header.php';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chad's Cave</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div>
        <br><br>
        <h1>Get in touch!</h1>
        <p>Please fill in the fields:</p>
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="Full Name">
            <input type="email" name="email" placeholder="email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Enter Message"></textarea>
            <button type="submit" name="submit">SEND</button>
        </form>
    </div>
  </body>
</html>
