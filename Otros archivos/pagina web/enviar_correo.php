<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'parasoamcorreo@gmail.com';
  $subject = 'Nuevo mensaje de contacto';
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-type: text/html\r\n";
  $body = "<h1>Nuevo mensaje de contacto</h1>
            <p><strong>Nombre:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Mensaje:</strong> $message</p>";
  if (mail($to, $subject, $body, $headers)) {
    echo "Mensaje enviado correctamente";
  } else {
    echo "Hubo un error al enviar el mensaje";
  }
}
?>
