<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "vendor/autoload.php";
// require __DIR__."/vendor/autoload.php";

// $name = $_POST["name"]; // required
// $email = $_POST["email"]; // required
// $message = $_POST["message"]; // required
$envFile = "/.env";
if (file_exists($envFile)) {
    (new Dotenv\Dotenv(dirname($envFile)))->load();
}

// validation expected data exists
if(!isset($_POST["name"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["message"])) {
    died("Je nám líto, ale zdá se, že Vaše zpráva neobsahuje vyžadované údaje.");       
}
 
$name = $_POST["name"]; // required
$email = $_POST["email"]; // required
$message = $_POST["message"]; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
    $error_message .= "Zadaná adresa není platná.<br />";
    }
    
    $string_exp = "/^[A-Za-z .'-]+$/";
    
    if(!preg_match($string_exp,$name)) {
    $error_message .= "Zadané jméno není platné.<br />";
    }
    
    if(strlen($message) < 2) {
    $error_message .= "Vaše zpráva není platná.<br />";
    }
    
    if(strlen($error_message) > 0) {
    died($error_message);
    }
    
    $dotenv = new Dotenv\Dotenv(dirname($envFile));
    
    if (file_exists($envFile)) {
        (new Dotenv\Dotenv(dirname($envFile)))->load();
    }

// $dotenv = new Dotenv\Dotenv($envFile);
// $dotenv->load();

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {


    
    
    

    //Attachments
    // $mail->addAttachment("/var/tmp/file.tar.gz");         // Add attachments
    // $mail->addAttachment("/tmp/image.jpg", "new.jpg");    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Name = ;
    $mail->Subject = $name . "Message from your website";
    $mail->Body = $email_from . "<br>" . $message . "<br>" . $name;
    

    $mail->send();
    echo "Děkuji, Vaše zpráva byla odeslána. Ozvu se Vám co nejdříve.";
} catch (Exception $e) {
    echo "Zpráva nemohla být odeslána. Mailer Error: ", $mail->ErrorInfo;
}