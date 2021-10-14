<?php

$para = 'dominator01100@gmail.com, sanchez01100@gmail.com';
$asunto = 'Mensaje desde Portfolio';
$mailheader = "From: " . $_POST['email'] . "\r\n";
$mailheader .= "Reply-To: " . $_POST['email'] . "\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: " . $_POST['name'] . "\n";
$MESSAGE_BODY .= "\n<br />Email: " . $_POST['email'] . "\n";
$MESSAGE_BODY .= "\n<br />Mensaje: " . n12br()$_POST['message']) . "\n";

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die('Error al enviar email!');

header('Location: index.html')

?>
