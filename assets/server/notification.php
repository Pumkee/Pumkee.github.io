
    
    <?php

require("/Applications/MAMP/htdocs/PHPMailer/src/PHPMailer.php");
require("/Applications/MAMP/htdocs/PHPMailer/src/SMTP.php");
require("/Applications/MAMP/htdocs/PHPMailer/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer();
$mail->isSMTP();
$mail->CharSet = 'utf-8';
$mail->SMTPDebug = 3;
$mail->SMTPAuth =true;
$mail->SMTPSecure ='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->isHTML();
$mail->Username="david.diazzr@gmail.com";
$mail->Password="Alfredo123$";
$mail->AddReplyTo('pumkee.company@gmail.com', 'david');
$mail->AddAddress('juandavid.diaz05@gmail.com', 'Juan');
$mail->SetFrom('pumkee.company@gmail.com', 'david');
$mail->Subject='hello world';
$mail->Body='a test email';
$mail->send();





/*
 if($mail->Send())
{
echo "Thank you for register u got a notification through the mail you provide";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
require_once 'mailer/class.phpmailer.php';
/* creates object
$mail = new PHPMailer(true);
$mailid = "pumkee.company@gmail.com";
$subject = "Thank u";
$text_message = "Hello";
$message = "New User Registered. Mail id :".$mailid."";

try
{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="pumkee.company@gmail.com";
$mail->Password ="ColUsa2021@";
$mail->SetFrom('pumkee.company@gmail.com','Team Pumkee');
$mail->AddReplyTo("pumkee.company@gmail.com","Team Pumkee");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
echo "You have a new user";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
"; 
}*/
?>
