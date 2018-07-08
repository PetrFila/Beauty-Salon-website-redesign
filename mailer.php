<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name_error = $email_error = $subject_error = $message_error = "";
$name = $email = $subject = $message = "";

// preventing the script to run automatically
if ($name == "" and $email == "" and $subject == "" and $message == "") {
  

    // validating POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name_error = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $name_error = "Only letters and white spaces allowed";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $email_error = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_error = "Invalid email format";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["subject"])) {
            $subject_error = "Subject is required";
        } else {
            $subject = test_input($_POST["subject"]);
            if (strlen($subject) < 2) {
                $subject_error = "Subject is invalid";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["message"])) {
            $message_error = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
            if (strlen($message) < 2) {
                $message_error = "Vaše zpráva není platná.<br />";
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


} else {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    //Load Composer's autoloader
    require "vendor/autoload.php";
    // require __DIR__."/vendor/autoload.php";

   
    $envFile = "/.env";
    if (file_exists($envFile)) {
        (new Dotenv\Dotenv(dirname($envFile)))->load();
    }
      
    //     $dotenv = new Dotenv\Dotenv(dirname($envFile));
        
    //     if (file_exists($envFile)) {
    //         (new Dotenv\Dotenv(dirname($envFile)))->load();
    //     }

    // $dotenv = new Dotenv\Dotenv($envFile);
    // $dotenv->load();

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {

        //Server settings
        
        
        
        Add a recipient
        // $mail->addAddress("ellen@example.com");               // Name is optional
        // $mail->addReplyTo("info@example.com", "Information");
        // $mail->addCC("cc@example.com");
        // $mail->addBCC("bcc@example.com");

        //Attachments
        // $mail->addAttachment("/var/tmp/file.tar.gz");         // Add attachments
        // $mail->addAttachment("/tmp/image.jpg", "new.jpg");    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        // $mail->Name = ;
        $mail->Subject = $name . " " . $subject;
        $mail->Body = "<div> $email </div>" .  "<div> $message </div>" . "<div> $name </div>";
        

        $mail->send();
        // echo '<script> setTimeout(close("Děkuji, Vaše zpráva byla odeslána. Ozvu se Vám co nejdříve."), 5000); </script>';
        $success =  "<span class='success'>Děkuji, Vaše zpráva byla odeslána. Ozvu se Vám co nejdříve.</span>";
        "<script> setTimeout(close($success), 5000); </script>";
        $name = $email = $subject = $message = "";
        print_r("Variables reseted",$_POST[$name]);
        
    } catch (Exception $e) {
        $failure = "<span class='failure'>Zpráva nemohla být odeslána. Mailer Error: ' '</span>, $mail->ErrorInfo";
    }
    
}
?>