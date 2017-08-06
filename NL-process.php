<?php

$emailmanager = 'suscripcion@name.com';


$scriptUrl = 'http://www.dominio.com/NL-confirm.php';

$urlok = 'http://www.dominio.com/NL-ok.html';
$urlko = 'http://www.dominio.com/NL-ko.html';

error_reporting(0);

$email = trim($_POST['email']);

$body = "Gracias por la suscripción!

Para confirmar solicitud, haz clic en el siguiente enlace o copialo en el navegador:

$scriptUrl?email=$email

Si no has solicitado esta suscripción olvida este mensaje.
";


$Ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);
if ($Ok) {
	mail($email,'Por favor confirma la suscripción.',$body,'From: '.$emailmanager);
	Header("Location: $urlok");
} else {
	Header("Location: $urlko");
}
?>
