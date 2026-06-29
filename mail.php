<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//print_r($_POST);

if (!empty($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
     

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtpout.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'enrollments@enversity.co.in';
        $mail->Password = 'enversity1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // safer than using plain 'tls'
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('enrollments@enversity.co.in', 'Website Enquiry Form');
        $mail->addAddress('enrollments@enversity.co.in');
      

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Website';
        $mail->Body = "
        <html>
        <body>
            <h2>Website Enquiry Details</h2>
            <table border='1' cellpadding='8' cellspacing='0'>
                <tr><td><strong>Full Name:</strong></td><td>{$name}</td></tr>
              <tr><td><strong>Email id:</strong></td><td>{$email}</td></tr>
                <tr><td><strong>Phone Number:</strong></td><td>{$number}</td></tr>
               
            </table>
        </body>
        </html>";

        $mail->AltBody = "Full Name: $name\nPhone Number: $number\nCourse: $email";

        $mail->send();
        echo "<script>window.location.href = 'pay.php?name=$name&&email=$email&&number=$number';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "<script>alert('Invalid request. Please fill out the form correctly.'); window.location.href = 'index.php';</script>";
}
?>