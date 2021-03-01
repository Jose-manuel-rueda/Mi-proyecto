
<?php
$numero_tel = $_POST['telefono'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];

echo $email;
echo $numero_tel;
echo $asunto;

mail('jusep888@mail.com',$numero_tel,$email,$asunto);
?>
