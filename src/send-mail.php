<?php

// Contact Nombre
$name =trim( $_POST['nombre'] );

// Details
$message=trim( $_POST['mensaje'] );

// Mail of sender
$email=trim( $_POST['email'] );

// From 
$header='From: ' . $name . ' <' . $email . '> ' . "\r\n" . 'Reply-To: ' . $email;

// Asunto
$subject = 'BAIT Software Online';

// Enter your email address
$contenido = "Nombre: $nombre \n\nEmail: $email \n\nMensaje: $mensaje";
$to ='info@baitsoftware.com';
$send_contact=mail($to,$subject,$contenido,$header);

// Check, if message sent to your email 
// display message "We've recived your information"
/*if($send_contact){
	header("Location: contacto-enviado.html");
}
else {
	header("Location: contacto-no-enviado.html");
}*/
?>