<?php
  $email = $_GET['email'];
  $subject = $_GET['subject'];
  $message = "From: " . $email . "\n";
  $message .= $_GET['message'];

  if(mail("charleshopkinsiv@gmail.com",$subject,$message)) {
    echo "Message accepted" . $email;
  }
  else {
    echo "Error: Mail not accepted";
  }

?>