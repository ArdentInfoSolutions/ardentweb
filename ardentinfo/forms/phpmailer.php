<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';
//echo 'Message could not be sent.'
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
            $mail = new PHPMailer;
            $mail->SMTPDebug = 4;                         
            $mail->isSMTP();                                     
            $mail->Host = 'smtppro.zoho.com'; 
            $mail->SMTPAuth = true;   

 		

            $mail->Username   = 'sales@ardentinfo.com'; 
            $mail->Password   = 'g7rG6xrxduhk';
				
				
				
           $mail->SMTPSecure = 'ssl';                          
           $mail->Port = 465;
				
            $mail->From = 'sales@ardentinfo.com';
            $mail->FromName = $name;
           $mail->addAddress($email);    
			
            $mail->isHTML(true);                                  
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            //if(!$mail->send()) {
               // echo 'Message could not be sent.';
                //echo 'Mailer Error: ' . $mail->ErrorInfo;
            //} else {
                //echo 'Message has been sent';
            //}
?>
