<?php
include("../env.php");
require "../emailSender/SMTP.php";
require "../emailSender/PHPMailer.php";
require "../emailSender/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Input data
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

// Validation
if (empty($name)) {
    echo "Enter Name";
} elseif (empty($email)) {
    echo "Enter Email";
} elseif (strlen($email) > 100) {
    echo "Email Address Should Contain Less Than 100 Characters";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email";
} elseif (empty($subject)) {
    echo "Enter Subject";
} elseif (empty($message)) {
    echo "Enter Message";
} else {
    // Send email
    $mail = new PHPMailer;

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'skaushalya308@gmail.com';
        // Use an environment variable or a more secure method to store this
        $mail->Password = getenv('GMAIL_PASSWORD'); 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        
        $mail->setFrom($email, $name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress('skaushalya308@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'New Email - ' . $subject;
        
        $bodyContent = '<p>Name: ' . htmlspecialchars($name) . '</p>';
        $bodyContent .= '<p>Email: ' . htmlspecialchars($email) . '</p>';
        $bodyContent .= '<p>Subject: ' . htmlspecialchars($subject) . '</p>';
        $bodyContent .= '<p>Message: ' . nl2br(htmlspecialchars($message)) . '</p>'; // Converts newlines to <br>
        
        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo 'පණිවිඩය යැවීම අසාර්ථකයි: ' . $mail->ErrorInfo;
        } else {
            echo ("පණිවිඩය යැවීම සාර්ථකයි");
        }
    } catch (Exception $e) {
        echo 'පණිවිඩය යැවීම අසාර්ථකයි. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
