<?php
$result="";
date_default_timezone_set('Etc/UTC');
require '../PHPMailerAutoload.php';
if(isset($_POST['submit'])){
//if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['msg']) && !empty($_POST['email']))
require 'phpmailer/PHPMailerAutoload.php'
$mail = new PHPMailer;
$mail = ->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='guicodecodigo@gmail.com';
$mail->Password='guicode157';

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('galindoperezfernando@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);
 
 $mail->isHTML(true);
 $mail->Subject='Enviado por '.$_POST['name'];
 $mail->Body='<h1 align=center>name: '.$_POST['name'] .'<br>email: '.$_POST['email'].'<br>subject: '.$_POST['subject']
 .'<br>message: '.$_POST['msg'].'</h1>';

//$mail = @mail($destino,$correo,$name,$asunto,$mensaje);

if(!$mail->send){
        $result="OK";
    }
}

echo $result;
?>





