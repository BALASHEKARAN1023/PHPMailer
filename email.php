<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
$name =htmlentities($_POST['name']);
$email =htmlentities($_POST['email']);
$subject =htmlentities($_POST['subject']);
$message =htmlentities($_POST['message']);

$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='studypurpose886@gmail.com';
$mail->Password='nvtzaqaqkfhnwqbe';//App password
$mail->Port=465;
$mail->SMTPSecure='ssl';
$mail->setFrom($email,$name);
$mail->addAddress($email);
$mail->Subject=("$email($subject)");
$mail->Body=$message;
$mail->send();

header("Location: ./response.php");

}

?>