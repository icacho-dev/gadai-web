<?php
if( isset($_POST['name']) )
{
	$to = 'contacto@gadai.com.mx'; // Replace with your email

	$subject = 'Desde GADAI web - '. $_POST['subject'];
	$message = 'Desde GADAI web - '. $_POST['subject'] . "\n\n" . 'Mensaje:' . "\n\n" . $_POST['message'] . "\n\n" . 'Enviado por: ' . $_POST['name'] . ", email: " . $_POST['email']  . "\n\n" . '- Desde formuario de contacto en: gadai.com.mx';
	$headers = 'From: ' . $_POST['name'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>
