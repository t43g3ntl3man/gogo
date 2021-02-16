<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("assets/PHPMailer-master/src/Exception.php");
include("assets/PHPMailer-master/src/PHPMailer.php");
include("assets/PHPMailer-master/src/SMTP.php");

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "alitaimur4@gmail.com";
$mail->Password   = "dodger!@#()";
echo "SUp";
$mail->IsHTML(true);
$mail->AddAddress("sp19bscs0051@maju.edu.pk", "recipient-name");
$mail->SetFrom("alitaimur4@gmail.com", "from-name");
$mail->AddReplyTo("alitaimur4@gmail.com", "reply-to-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>