 <?php

require("phpmailer/class.phpmailer.php");
require("phpmailer/class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["mail"]) || !isset($_POST["consulta"]) || !isset($_POST["propuesta"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}

if ( isset($_POST["nombre"]) && isset($_POST["mail"]) && isset($_POST["consulta"]) && isset($_POST["propuesta"]) ){

$nombre = $_POST['nombre'];
$mailfrom = $_POST['mail'];
$propuesta = $_POST['propuesta'];
$consulta = $_POST['consulta'];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1490180.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "consultas@equipobetania.com";  // Mi cuenta de correo
$smtpClave = "N0rm153mpr3nd3";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "consultas@equipobetania.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $mailfrom; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = $propuesta; // Este es el titulo del email.
$mensajeHtml = nl2br($consulta);
$mail->Body = "{$consulta}"; // Texto del email en formato HTML
$mail->AltBody = "{$consulta}"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo '<script language="javascript">';
    echo 'alert("El correo fue enviado correctamente.")';
    echo '</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("Ocurrió un error inesperado.")';
    echo '</script>';
}
echo '<script language="javascript">';
echo 'window.location.href="../index.php";';
echo '</script>';
}