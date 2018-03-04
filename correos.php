<!-- 
	2 posibilidades para mandar correos en PHP
		- Tener un servidor de correo electrónico propio
				postfix -> Servidor de correo electrónico OpenSource, 
				dovecot -> Servidor de IMAP y POP3 OpenSource, 
						-> IMAP: Protocolo de Acceso a Mensajes de Internet
						-> POP3: Protocolo de Oficina Postal
				squirrelmail -> Aplicación Web para manejo de correo electrónico
				Para enviar correo sólo se necesita usar la función mail(CORREO, SUBJECT, MENSAJE);
		- Si no se tiene un servidor de correo electrónico
		Utilizamos PHPMailer u otro similar
 -->

<?php 
	require_once '/phpmailer/PHPMailerAutoload.php';
	require_once '/phpmailer/class.phpmailer.php';
	require_once '/phpmailer/class.smtp.php';

	echo '<br> Declarando la clase';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMPTAuth = true;
	$mail->SMPTSecure = 'ssl';
	$mail->Host="smtp.gmail.com";
	$mail->Port=465;
	echo "<br>Datos del usuario";

	$mail->Username = "beto4600@gmail.com";
	$mail->Password = "betococol4600";

	$mail->From = "beto4600@gmail.com";
	$mail->FromName = "Chino-sama";
	$mail->Subject = "Enviar Mail con PHPMailer 2 server";
	$mail->MsgHTML("<h1>HOLI! c:</h1>");
	$mail->AddAddress("roberto.h@lacueva.io", "Yo pero suaj");

	$mail->IsHTML(true);

	if(!$mail->send()) {
		echo "<br>Message could not be sent";
		echo "<br>Mailer Error: " . $mail->ErrorInfo;
		exit;
	}
	echo "<br>Correo Enviado :d";
?>