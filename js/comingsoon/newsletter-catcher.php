<?php
if($_POST){
    $name = 'GADAI web';
    $email = $_POST['form_email'];
    $message = 'La cuenta: '.$email.' solicita ser informada cuando el sitio web este listo.';

//send email
    mail("maindesign@gmail.com", "Avisar a - " . $email, $message);
}
?>
