
<?php
$numero_tel = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

$header = 'Para: ' . $email . " \r\n";
$header .= 'X_Mailer: PHP/' . phpversion() . " \r\n";
$header .= 'Mime-Version: 1.0' . " \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensage ue enviado por: " . $email . "\r\n";
$message .= "Su telefono es: " . $numero_tel . "\r\n";
$message .= "Asunto: " . $_POST['asunto'] . "\r\n";
$message .= "Enviado el: " . date('d-m-Y', time());

$para = 'jusep888@gmail.com';
$asunto = 'Correo web';


mail($para, $asunto, utf8_decode($message), $header);

header('Location:index.html');
?>
jj