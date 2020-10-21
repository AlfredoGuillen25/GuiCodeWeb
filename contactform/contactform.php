<?php

if(isset($_POST['enviar'])){
 if(!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['msg']) && !empty($_POST['email']))
$destino = "halo_fercho1@hotmail.com";
$name = $_POST['name'];
$correo = $_POST['email'];
$asunto $_POST['subject'];
$mensaje  $_POST['msg'];
//$header = "From: halo_fercho1@hotmail.com" . "\r\n";
//$header.= "Reply.To: halo_fercho1@hotmail.com" . "\r\n";
//$header.= "X-Mailer: PHP/" . phpversion();
$mail = @mail($destino,$correo,$name,$asunto,$mensaje);
header("Location: https://www.facebook.com/pages/category/Software-Company/GuiCode-107393933974022/");
if($correo){
    echo"<h4>Enviado</h4>";
}
}

?>

