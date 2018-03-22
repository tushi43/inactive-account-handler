<?php

// require_once('PHPMailer/get_oauth_token.php');
 require_once ('PHPMailer/src/Exception.php');
require_once ('PHPMailer/src/PHPMailer.php');
require_once ('PHPMailer/src/SMTP.php');
 $mail = new PHPMailer(true);
 $mail->isSMTP();
 $mail->SMPTAuth = true;
 $mail->SMTPSecure = 'ssl';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = '465';
 $mail->isHTML();
 $mail->UserName = 'tushar.jumani@gmail.com';
 $mail->PassWord = 'wgpcgr@43';
 $mail->Subject = 'IAH testing';
 $mail->Body = 'this is a email to test whether it connects with gmail amd send emails or not';
 $mail->AddAddress('2015tushar.jumani@ves.ac.in');
 
 $mail->Send();

 ?>﻿