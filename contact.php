<?php
  if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
  }
    $myeMail = "chard_x3m@yahoo.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". \n Message: \n" . $message;
   mail($myeMail, $subject, $message2, $header);
   header("Location: home.php?mailsent")
 ?>
