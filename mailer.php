<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$errors = [];

function isFormSent() {
    return !empty($_POST);
}

function showError($key, $message) {
    return isFormSent() && isset($message[$key]) ? $message[$key] : '';
}

function post($varName) {
    $data = $_POST[$varName] ?? FALSE;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// validating POST request
if (!preg_match('/^[a-zA-Z ]+$/', post('name'))) {
    $errors['name_error'] = 'Name is required and only letters and white spaces allowed.';
}

if (!filter_var(post('email'), FILTER_VALIDATE_EMAIL)) {
    $errors['email_error'] = 'Invalid email.';
}

if (strlen(post('subject')) < 2) {
    $errors['subject_error'] = 'Invalid subject.';
}

if (strlen(post('message')) < 2) {
    $errors['message_error'] = 'Invalid message.';
}

function hasErrors($errors) {
    return count($errors) > 0;
}

// preventing the script to run automatically
if (isFormSent() && !hasErrors($errors)) {

    //Load Composer's autoloader
    // require __DIR__ . "/vendor/autoload.php";

    // $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
    // $dotenv->load();

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {

        //Server settings
        $mail->SMTPDebug = FALSE;                             // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com";                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = getenv('EMAIL');                    // SMTP username
        $mail->Password = getenv('PASS');                     // SMTP password
        $mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom("philharmonic@centrum.cz");    // Add a recipient
        $mail->addAddress("philharmonic@centrum.cz");     
        
       
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
        $mail->Subject = post('name') . " " . post('subject');
        $mail->Body = sprintf(
            "<div> %s </div>".  
            "<div> %s </div>". 
            "<div> %s </div>", 
            post('email'), post('message'), post('name'));
        

        $mail->send();
        // echo '<script> setTimeout(close("Děkuji, Vaše zpráva byla odeslána. Ozvu se Vám co nejdříve."), 5000); </script>';
        $success =  "<span class='success'>Děkuji, Vaše zpráva byla odeslána. Ozvu se Vám co nejdříve.</span>";
        "<script> setTimeout(close($success), 5000); </script>";
        $_POST = NULL;
        
    } catch (Exception $e) {
        $failure = "<span class='failure'>Zpráva nemohla být odeslána.</span>";
        $failure .= "<br><em>{$mail->ErrorInfo}</em>";
    }
    
}
