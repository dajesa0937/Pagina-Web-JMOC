<?php

error_reporting(0);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' .$correo " \r\n";
$header .= "X-mailer: PHP/" .phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n ";
$header .= "Content-Type: text/plain";

$message = "Este Mensaje Fue Enviado por: " .$nombre . " \r\n";
$message .= "Su Email Es:  " .$correo . " \r\n";
$message .= "Su Telefono Es: " .$telefono . " \r\n";
$message .= "Mensaje: " .$_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " .date('d/m/Y', time());

$para = 'dajesa0937@gmail.com';
$mensaje = 'Asunto del Mensaje';

mail($para, $mensaje, utf8_decode($message), $header);
echo 'Mensaje enviado correctamente'

header('Location: index.html');


?>