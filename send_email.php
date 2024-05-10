<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendEmailNotification($emails, $loanActivity, $memberName)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0; // 2 for detailed debug output
        $mail->Debugoutput = 'html'; // Output format (html or echo)

        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'sazekraft@gmail.com';
        $mail->Password = 'pjkz tctb utlz acdt';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('klokeshj5@gmail.com', 'Mailer');
        foreach ($emails as $email) {
            $mail->addAddress($email);
        }

        $mail->isHTML(true);
        $mail->Subject = 'Loan Activity Alert';
        $mail->Body    = "Dear User,<br><br>As part of our commitment to transparency and support for our clients and their families, we wanted to provide you with a brief update on <span style='color: blue;'>{$memberName}</span>'s loan activity with us.<br><br>We understand the importance of family involvement in financial matters and are here to address any questions or concerns you may have.<br><br>Should you wish to discuss <span style='color: blue;'>{$memberName}</span>'s loan activity in more detail or if there is any way we can assist further. Thank you for your trust in us.<br><br>We look forward to continuing to serve <span style='color: blue;'>{$memberName}</span> and your family.<br><br>Warm regards,<br>TEAM SAFE SURFING";

        $mail->send();
        echo 'Email sent successfully';
    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
}