<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
  
require 'core.php';

require 'connect.php';

$email = $_SESSION['email'];

$username = $_SESSION['username'];

$password = $_SESSION['otp'];

$mail = new PHPMailer(true); 
                             
try {
   
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      

	$mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;          
    $mail->Username = 'iahteam17@gmail.com';                 
    $mail->Password = 'wgpcgr@43';                           
    $mail->SMTPSecure = 'ssl';                            
    $mail->Port = '465';                                    
    $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true  )  );
    $mail->setFrom('iahteam17@gmail.com', 'IAH software');
	$mail->addAddress('2015saili.kadam@ves.ac.in'); 
    $mail->AddReplyTo('iahteam17@gmail.com');
    $mail->isHTML(true);                                 
    $mail->Subject = 'DELETE DATA';
    $mail->Body    = '<html>
	<body>
	Hi there '.$username.',

 This email is regarding your account inactivity for the stipulated time .
 192.168.103.194/iah/decision.php <br>
 Please click on the link provided above and login with the given credentials, choose one of the two options provided.If you wish to continue with your account click on YES else click on NO to delete.There are two options under delete:
<ul><li>Download data and delete</li>
<li>Delete Directly </li></ul>
Email: '.$email.'<br>
Password: '.$password.'<br><br>
Having problems with the link?
If the link above doesn\'t work, please copy and paste the address below into your browser window and enter the code to activate your account. 
If you have any questions about your account or any other matter, please feel free to contact us at iahteam17@gmail.com or by phone at 9768524063.
Regards,
IAH TEAM



';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>