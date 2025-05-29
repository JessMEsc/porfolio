<?php
<?php
// Validar y sanitizar los datos
$nombre = htmlspecialchars(trim($_POST['nombre']));
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$mensaje = htmlspecialchars(trim($_POST['mensaje']));

if ($nombre && $email && $mensaje) {
    $to = 'jessi93-@hotmail.com';
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    mail($to, $subject, $body, $headers);
    header('Location: HTML/Gracias.html');
    exit;
} else {
    echo "Datos inválidos. Por favor, revisa el formulario.";
}
?>