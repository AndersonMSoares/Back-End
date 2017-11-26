<?php
$para="papu_nilo@hotmail.com";
$nome=$_REQUEST['name'];
$email=$_REQUEST['email'];
$assunto=$_REQUEST['subjectmatter'];
$texto=$_REQUEST['message'];


$corpo="<strong>Mensagem de contato </strong><br><br>";
$corpo .="<strong>Nome: </strong> $nome";
$corpo .="<br><strong>Email: </strong> $email";
$corpo .="<br><strong>Assunto: </strong> $assunto";
$corpo .="<br><strong>Mensagem: </strong> $texto";

$header= "Content-Type: text/html; charset= utf-8\n";
$header.="From: $email Reply-to : $email\n";


@mail($para, $assunto, $corpo,$header);

header("location: contato.php?msg=Enviado");



?>