<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$paypal = $_POST['paypal'];

// Datos para el correo
$destinatario = "intocaster@gmail.com";
$asunto = "Purchase Summary";

$carta = "Customer: $name \n";
$carta .= "email: $email \n";
$carta .= "Phone-Number: $phone \n";
$carta .= "Address-Line-1: $line1 \n";
$carta .= "Address-Line-2: $line2 \n";
$carta .= "Transaction-ID: $paypal \n";
$header = "Sent from the Raging Angel store";
// Enviando Mensaje
mail($destinatario, $asunto, $carta, $header);
header('Location:index.html');



?>
