<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// require __DIR__.'/vendor/autoload.php';

$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$message = $_POST['message']; // required
$envFile = '/.env';
// $dotenv = new Dotenv\Dotenv(dirname($envFile));

if (file_exists($envFile)) {
    (new Dotenv\Dotenv(dirname($envFile)))->load();
}
// $dotenv = new Dotenv\Dotenv($envFile);
// $dotenv->load();

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    
    //Server settings
    $mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'myanotheremail83@gmail.com'; //getenv('EMAIL');                 // SMTP username
    $mail->Password = 'testingaccount!)@('; //getenv('PASS');                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('philharmonic@centrum.cz');
    $mail->addAddress('philharmonic@centrum.cz');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Name = ;
    $mail->Subject = 'Message from your website';
    $mail->Body = $name . '<br>' . $message . '<br>' . $email_from;
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}