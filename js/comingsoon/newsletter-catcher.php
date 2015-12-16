<?php
if($_POST){
    $name = 'GADAI web';
    $email = $_POST['email'];
    $message = 'La cuenta: '.$email.' solicita ser informada cuando el sitio web este listo.';

//send email
    mail("contacto@gadai.com.mx", "Avisar a - " . $email, $message);
}
?>
