<?php
$firstname = htmlspecialchars($_POST['first'],ENT_QUOTES,'UTF-8');
$lastname = htmlspecialchars($_POST['last'],ENT_QUOTES,'UTF-8');
$email = htmlspecialchars($_POST['email'],ENT_QUOTES,'UTF-8');
$phonenumber = htmlspecialchars($_POST['phone'],ENT_QUOTES,'UTF-8');
$addressline1 = htmlspecialchars($_POST['add1'],ENT_QUOTES,'UTF-8');
$addressline2 = htmlspecialchars($_POST['add2'],ENT_QUOTES,'UTF-8');
$paypalid = htmlspecialchars($_POST['ppid'],ENT_QUOTES,'UTF-8');
$graypuffer = htmlspecialchars($_POST['gp'],ENT_QUOTES,'UTF-8');
$shearlingjacket = htmlspecialchars($_POST['sj'],ENT_QUOTES,'UTF-8');
$blackjacket = htmlspecialchars($_POST['bj'],ENT_QUOTES,'UTF-8');
$purplejacket = htmlspecialchars($_POST['pj'],ENT_QUOTES,'UTF-8');
$graynumber = htmlspecialchars($_POST['gn'],ENT_QUOTES,'UTF-8');
$shearlingnumber = htmlspecialchars($_POST['sn'],ENT_QUOTES,'UTF-8');
$blacknumber = htmlspecialchars($_POST['bn'],ENT_QUOTES,'UTF-8');
$purplenumber = htmlspecialchars($_POST['pn'],ENT_QUOTES,'UTF-8');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                        // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@ragingangelshop.com';                     // SMTP username
    $mail->Password   = 'Ragingangelinfo-1';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@ragingangelshop.com', 'Raging Angel');
    $mail->addAddress('intocaster@gmail.com', 'admin');     // Add a recipient
    $mail->addAddress('info@ragingangelshop.com');               // Name is optional
    



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'NEW SALE: PURCHASE SUMMARY';
    $mail->Body    = '<b>First Name: </b>'.$firstname .'<br>' .'<b>Last Name: </b>'.$lastname .'<br>' .'<b>Email: </b>'.$email .'<br>' .'<b>Phone Number: </b>'.$phonenumber .'<br>' .'<b>Address Line 1: </b>'.$addressline1 .'<br>' .'<b>Address Line 2: </b>'.$addressline2 .'<br>' .'<b>PayPal Transaction ID: </b>'.$paypalid .'<br>' .'<b>Gray Puffer: </b>'.$graypuffer .'<br>' .'<b>Gray Puffer number of items: </b>'.$graynumber .'<br>' .'<b>Shearling Jacket: </b>'.$shearlingjacket .'<br>' .'<b>Shearling Jacket number of items: </b>'.$shearlingnumber .'<br>' .'<b>Black Jacket: </b>'.$blackjacket .'<br>' .'<b>Black Jacket number of items: </b>'.$blacknumber .'<br>' .'<b>Purple Jacket: </b>'.$purplejacket .'<br>' .'<b>Purple Jacket number of items: </b>'.$purplenumber;
                     

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}