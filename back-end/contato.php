<?php

include('library.php');


$nome=$_REQUEST['name'];
$email=$_REQUEST['email'];
$assunto=$_REQUEST['subjectmatter'];
$texto=$_REQUEST['message'];

/*
$para="papu_nilo@hotmail.com";
$corpo="<strong>Mensagem de contato </strong><br><br>";
$corpo .="<strong>Nome: </strong> $nome";
$corpo .="<br><strong>Email: </strong> $email";
$corpo .="<br><strong>Assunto: </strong> $assunto";
$corpo .="<br><strong>Mensagem: </strong> $texto";

$header= "Content-Type: text/html; charset= utf-8\n";
$header.="From: $email Reply-to : $email\n";

mail($para, $assunto, $corpo,$header);

*/

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 

$mail = new PHPMailer(true);
 

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

