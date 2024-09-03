
<?php

require "emailSender/SMTP.php";
require "emailSender/PHPMailer.php";
require "emailSender/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

if (empty($name)) {
    echo "Enter Name";
} else if (empty($email)) {
   echo "Enter Email";
} else if (strlen($email) > 100) {
    echo "Email Address Should Contain Less Than 100 Charaters";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo "Invalid Email";
}  else if (empty($subject)) {
   echo "Enter subject";
} else if (empty($message)) {
    echo "Enter message";
 } else {
   $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com'; //example : google- smtp.gmail.com
    $mail->SMTPAuth = true;
    $mail->Username = 'skaushalya308@gmail.com';
    $mail->Password = 'gpth hlhx xqfj tojf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($email,$name);
    $mail->addReplyTo($email,$name);
    $mail->addAddress('skaushalya308@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'New Email -'.$subject.''; //SUBJECT
    $bodyContent = '<p>Name - ' . $name . '</p></br><p>Email - ' . $email . '</p></br><p>subject - ' . $subject . '</p></br><p>message - ' . $message . '</p>'; //EMAIL BODY HTML
    $mail->Body    = $bodyContent;

    if (!$mail->send()) {
        echo 'Email Send failed';
    } else {
        echo 'success';
    }
}
?>


