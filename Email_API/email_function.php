<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function emailFunction($email, $subject, $message){

  $to_id = $email;
  $subject = $subject;
  $message = $message;

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;

  // sample email here
  $mail->Username = 'HabibahWicks01@gmail.com';
  $mail->Password = 'Kdeledk02';
  // you can use ssl
  $mail->SMTPSecure = 'tls';
  // 465 or 5465
  $mail->Port = 587;

  //Input of setFrom 'Your email', 'Your name'
  $mail->setFrom('HabibahWicks01@gmail.com', 'Habibah Wicks');
  $mail->addAddress($to_id);
  $mail->Subject = $subject;
  $mail->Body = $message;

  if (!$mail->send()) {
    return false;
  }
  else{
    return true;
  }
  
}

?>