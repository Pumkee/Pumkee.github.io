<?php
include_once 'database.php';
$first_name = $_POST['first_name'];
$email = $_POST['email'];

/* sql query for inserting data into database */

mysqli_query($conn,"insert into employee (first_name,email) values ('$first_name', $email')") or die(mysqli_error());
require_once 'mailer/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = $email;
$subject = "Thank u";
$text_message = "Hello";
$message = "Thank You for Contact with us.";

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
echo "Thank you for register u got a notification through the mail you provide";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
?>