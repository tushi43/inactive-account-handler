<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
  
require 'core.php';

require 'connect.php';

$email = $_SESSION['email'];

$hash = $_SESSION['hash'];

$otp = $_SESSION['otp'];

$username = $_SESSION['name'];

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
	$mail->addAddress($email); 
    $mail->AddReplyTo('iahteam17@gmail.com');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Signup | Verification';
    $mail->Body    = '<html>
	<body> <br><br>
Hi there, '.$username.',
<br><br>
Welcome to IAH!  Your registration is almost done. Please verify your email address by clicking the link below.
<br><br>
Please click this link to activate your account:
192.168.102.86/iah1/verify.php?email='.$email.'&hash='.$hash.'
 <br><br>
<br><br>
You are receiving this email because you requested an online user account with IAH.
•	Your username is '.$email.'.
•	Your Onw time password is '.$hash.'.
<br><br>
If you have any questions about your account or any other matter, please feel free to contact us at iahteam17@gmail.com or by phone at 9768524063.
<br><br>
Having problems with the link?
If the link above doesn\'t work, please copy and paste the address below into your browser window and enter the code to activate your account. 
<br><br><br><br>
Regards,
<b>IAH TEAM</b>
<br><br>
 </body>
 </html>
';
   
   $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

header('Location: home.php');

?>