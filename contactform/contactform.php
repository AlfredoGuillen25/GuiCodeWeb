<?php
$result="";
if(isset($_POST['submit'])){
 if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['email']))
require 'phpmailer/PHPMailerAutoload.php'
$mail = new phpmailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='guicodecodigo@gmail.com';
$mail->Password='guicode157';

$mail->setFrom($_POST['email'],
 $_POST['name'],
 $_POST['subject'],
 $_POST['message']);

 $mail->addAddress('galindoperezfernando@gmail.com');
 $mail->addReplyTo($_POST['email'],$_POST['name']);
 
 $mail->isHTML(true);
 $mail->Subjet='Enviado por '.$_POST['name'];

 $mail->Body='<h1 align=center>name: '.$_POST['name'] .'<br>email: '.$_POST['email'].'<br>subject: '.$_POST['subject']
 .'<br>message: '.$_POST['message'].'</h1>';

$mail = @mail($destino,$correo,$name,$asunto,$mensaje);

if($mail->send){
 $result="Algo esta mal.intentelo de nuevo por favor";
}else{
  $result="Gracias" .$_POST['name']."por contactarnos espera respuesta muy pronto!!";
}
}
?>

