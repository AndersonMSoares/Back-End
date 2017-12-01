<?php

$nome=$_REQUEST['name'];
$email=$_REQUEST['email'];
$assunto=$_REQUEST['subjectmatter'];
$texto=$_REQUEST['message'];

use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ Exception ;

require '../../vendor/autoload.php';

$mail = new PHPMailer(false);

$mail->isSMTP();
 
$mail->SMTPDebug = 2;

$mail->Host = 'smtp-mail.outlook.com';
 
$mail->SMTPAuth = true;

$mail->Username = 'shield-cp@hotmail.com';
 
$mail->Password = 'just2105';
 
$mail->SMTPSecure = 'tls';
 
$mail->Port = 587;
 
$mail->IsHTML(true);
 
$mail->setFrom('shield-cp@hotmail.com', 'Mailer');

$mail->addAddress($email, $nome);  

$mail->Subject = $assunto;

$mail->Body = $texto;

if($mail->Send()):
    echo 'Enviado com sucesso !';
else:
    echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
endif;
?>

