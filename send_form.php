<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['note']);

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Usually: mail.yourdomain.com or smtp.yourdomain.com
        $mail->SMTPAuth = true;
        $mail->Username = 'kaleemaielian@gmail.com'; // Your domain email
        $mail->Password = 'uifdylaezfboapsg'; // Your email password
        $mail->SMTPSecure = 'ssl'; // Or 'ssl'
        $mail->Port = 465; // Use 465 for 'ssl'

        // Sender & Recipient
        $mail->setFrom('kaleemaielian@gmail.com', 'Website Admission Form');
        $mail->addAddress('oasismcc@gmail.com'); // Your inbox where emails should arrive

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Inquiry';
        $mail->Body = "
            <h2>New Inquiry</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Service:</strong> {$service}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        $mail->send();
        header("Location: thank-you.html");
        exit();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
