<?php

// $nombre = $_POST ["fullname"];
// $mail = $_POST ["email"];
// $mensaje = $_POST ["message"];
// $phone = $_POST ["phone"];
// $asunto = $_POST ["asunto"];

// $mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
// $mensaje = "Su email es: " . $mail . "\r\n";
// $mensaje = "Su telefono es: " . $phone . "\r\n";
// $mensaje = "el asunto es: " . $asunto . "\r\n";
// $mensaje = "Mensaje:  " . $_POST ["mensaje"] . "\r\n";
// $mensaje = "Enviado el: " . date(d/m/Y, time()) . "\r\n";

// $para = santiagomessinae@gmail.com;
// $asunto = "Este mail fue enviado desde Sportivo Devoto";

// mail($para, $asunto, utf8_decode($mensaje), $header);
// header("./exito.html");


$nombre = $_POST ["nombre"];
$mail = $_POST ["mail"];
$asunto = $_POST ["asunto"];
$mensaje = $_POST ["mensaje"];

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje = "Su email es: " . $mail . "\r\n";
$mensaje = "el asunto es: " . $asunto . "\r\n";
$mensaje = "Mensaje:  " . $_POST ["mensaje"] . "\r\n";
$mensaje = "Enviado el: " . date(d/m/Y, time()) . "\r\n";

$para = "santiagomessinae@gmail.com";
$asunto "mensaje de sportivo devoto";

mail($para, $asunto, utf8_decode($mensaje), $header);
header("./exito.html");

?>