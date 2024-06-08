<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'helper.php';

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    validate();
    try {
        $email = $_POST['email'];
        $name = $_POST['fullName'];
        $address = $_POST['yourAddress'];
        $phone = $_POST['PhoneNumber'];
        $msg = $_POST['msg'];

        //Server settings
        $mail->SMTPDebug = 0;  // Desativa a saída de debug
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'caesar@santafe-companies.com';                     //SMTP username
        $mail->Password = 'Santafe963';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('caesar@santafe-companies.com', 'Contact Us Form');
        $mail->addAddress('caesar@santafe-companies.com', 'Customer ' . $name);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'A new customer has been registered';
        $mail->Body = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Contact Us Form</title>
        </head>
        <body>
            <h1>A new Customer has been registered!</h1><br>
            <table>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>$phone</td>
                    </tr>
                    <tr>
                        <td>Msg:</td>
                        <td>$msg</td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>
        ";
        $mail->AltBody = "A new Customer has been registered!
        Name: $name. \n\r
        Email: $email. \n\r
        Address: $address. \n\r
        Phone: $phone. \n\r
        Msg: $msg";

        $mail->send();
        echo 'success';
        exit();
    } catch (Exception $e) {
        echo $e->getMessage(); // Retorne 'error' se houver uma exceção
        exit();
    }
}
