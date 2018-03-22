<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'connect.php';

ob_start();

error_reporting(0);

session_start();

$http_referer = @$_SERVER['HTTP_REFERER'];

function loggedin()

{

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))

return true;

return false;

}

function getuserfield($field)

{

global $conn;

$row = $_SESSION['user_id'];

$id = $row['id'];

$query = "SELECT $field FROM t1 WHERE id = $id";

if($query_run = mysqli_query($conn,$query))

{

if($row = mysqli_fetch_assoc($query_run))

{

$count = $row[$field];

return $count;

}

}

}

function email_send($email,$username,$password)
{
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
    $mail->Subject = 'Account Inactivity';
    $mail->Body    = '<html>
	<body> <br><br>
	Hi there '.$username.',<br/><br/>
	------------------------<br>
	Email: '.$email.'<br>
	Password: '.$password.'<br><br>
------------------------<br>
This email is regarding your account inactivity for the stipulated time.<br/>
Please click on the link provided
below and choose one of the two options provided.<br/>If you wish to continue with your account click on YES
else click on NO to delete.There are two options under delete:<br>
· Download data and delete<br>
· Delete Directly<br><br>
<b>Link</b><br/>
192.168.102.86/iah1/decision.php <br>
Having problems with the link?
If the link above doesn\'t work, please copy and paste the address below into your browser window and
enter the code to activate your account.
If you have any questions about your account or any other matter, please feel free to contact us at
iahteam17@gmail.com or by phone at 9768524063.
<br><br> 
Regards,<br>
IAH TEAM	
 </body>
 </html>
';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

	
}

function email_feedback($email,$subject,$message)
{
	
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
    $mail->setFrom($email);
	$mail->addAddress('iahteam17@gmail.com', 'IAH software'); 
    $mail->AddReplyTo($email);
    $mail->isHTML(true);                                 
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.<br>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

	
}



?>