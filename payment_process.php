<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| STEP 1: Save User Details Before Payment
|--------------------------------------------------------------------------
*/

if (isset($_POST['amt']) && isset($_POST['name'])) {

    $_SESSION['name']   = $_POST['name'];
    $_SESSION['email']  = $_POST['email'];
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['amt']    = $_POST['amt'];

    echo "success";
    exit();
}

/*
|--------------------------------------------------------------------------
| STEP 2: After Successful Payment Send Email
|--------------------------------------------------------------------------
*/

if (isset($_POST['payment_id'])) {

    $payment_id = $_POST['payment_id'];

    $name   = $_SESSION['name'] ?? '';
    $email  = $_SESSION['email'] ?? '';
    $number = $_SESSION['number'] ?? '';
    $amt    = $_SESSION['amt'] ?? '';

    $mail = new PHPMailer(true);

    try {

        // SMTP Configuration
        $mail->isSMTP();

        // Uncomment for debugging if needed
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // Update SMTP settings according to your mail provider
        $mail->Host       = 'smtpout.secureserver.net';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'enrollments@enversity.co.in';
        $mail->Password   = 'enversity1234';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom(
            'enrollments@enversity.co.in',
            'Enversity Payment Notification'
        );

        // Admin Email
        $mail->addAddress('enrollments@enversity.co.in');

        // User Email
        if (!empty($email)) {
            $mail->addAddress($email);
        }

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'Payment Successful - Enversity';

        $mail->Body = "
        <html>
        <body>

        <h2>Payment Successful</h2>

        <table border='1' cellpadding='10' cellspacing='0' style='border-collapse:collapse;'>

            <tr>
                <td><strong>Name</strong></td>
                <td>{$name}</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>{$email}</td>
            </tr>

            <tr>
                <td><strong>Phone Number</strong></td>
                <td>{$number}</td>
            </tr>

            <tr>
                <td><strong>Amount Paid</strong></td>
                <td>&#8377; {$amt}</td>
            </tr>

            <tr>
                <td><strong>Payment ID</strong></td>
                <td>{$payment_id}</td>
            </tr>

            <tr>
                <td><strong>Date & Time</strong></td>
                <td>" . date('d-m-Y h:i A') . "</td>
            </tr>

        </table>

        <br>

        <p>Thank you for your payment.</p>

        </body>
        </html>";

        $mail->AltBody =
            "Payment Successful\n" .
            "Name: {$name}\n" .
            "Email: {$email}\n" .
            "Phone: {$number}\n" .
            "Amount: {$amt}\n" .
            "Payment ID: {$payment_id}";

        $mail->send();

        // Clear Session
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['number']);
        unset($_SESSION['amt']);

        echo "success";

    } catch (Exception $e) {

        echo "Mailer Error: " . $mail->ErrorInfo;
    }

    exit();
}

echo "Invalid Request";

?>