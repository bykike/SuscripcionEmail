<?php

$emailmanager = 'suscripcion@name.com';

$urlok = 'http://www.dominio.com/confirm-ok.html';
$urlko = 'http://www.dominio.com/confirm-ko.html';

error_reporting(0);

$email = trim($_GET['email']);
$Ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);
if ($Ok) {
	mail($emailmanager,'Nueva suscripción.','','From: '.$email);
	echo $urlok;
	Header("Location: $urlok");
} else {
	echo $urlko;	
	Header("Location: $urlko");
}
?>
