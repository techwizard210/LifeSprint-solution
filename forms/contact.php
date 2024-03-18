<?php
  $to = 'christiaan93210@gmail.com';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $headers = 'From: sender@example' . "\r\n" .
  'Reply-To: sender@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  
  // Send email
  if (mail($to, $subject, $message, $headers)) {
      echo 'Email sent successfully.';
  } else {
      echo 'Failed to send email.';
  }
?>
