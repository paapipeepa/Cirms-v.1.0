<?php
require 'vendor/autoload.php';
echo "Hello";
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org';   // SMTP username
$mail->Password = '11c95f9b933f2b3ff6c122c3effeb308';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted


//$mail->From = 'YOU@YOUR_DOMAIN_NAME';
$mail->From = 'mailgun@sandboxd149e0b9e4ce4363a8411227427f2ae5.mailgun.org';
$mail->FromName = 'Team Echo';
$mail->addAddress('praneethtkonda@gmail.com');                 // Add a recipient
echo $mail->addAddress;
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'This is a test mail from Team Echo';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

