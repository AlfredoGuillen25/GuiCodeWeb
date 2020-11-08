<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer(true);
try{
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='guicodecodigo@gmail.com';
$mail->Password='guicode157';

$mail->setFrom("guicodecodigo@gmail.com","GuiCode");
$mail->addAddress('alfredogll25@hotmail.com');
$mail->addAddress('galindoperezfernando@gmail.com');
//$mail->addReplyTo($_POST['email'],$_POST['name']);
 
 $mail->isHTML(true);
 $mail->Subject='Enviado desde GuiCode';
 $mail->Body='<h1 align=center>Nombre: '.$_POST['name'] .'<br>Correo: '.$_POST['email'].'<br>Asunto: '.$_POST['subject']
 .'<br>Mensaje: '.$_POST['message'].'</h1>';

$mail->send();
echo "OK";
}catch(Exception $e){
    echo "",$mail->ErrorInfo;
}
?>