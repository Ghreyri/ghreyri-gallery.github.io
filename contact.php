<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Inisialisasi PHPMailer
$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Ganti dengan server SMTP yang sesuai
    $mail->SMTPAuth = true;
    $mail->Username = 'Alquinsha1998@gmail.com'; // Ganti dengan alamat email Anda
    $mail->Password = '123Manufaktur'; // Ganti dengan kata sandi email Anda
    $mail->SMTPSecure = 'ssl'; // Anda dapat mengganti ini menjadi 'ssl' jika sesuai
    $mail->Port = 465; // Ganti dengan port SMTP yang sesuai

    // Pengirim dan penerima
    $mail->setFrom('Alquinsha1998@example.com', 'Ghrayri Gallery');
    $mail->addAddress('Alquinsha1998@example.com', 'Ghrayri Gallery'); // Ganti dengan alamat penerima

    // Isi email
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the email';
    $mail->Body = 'This is the HTML message body';

    // Kirim email
    $mail->send();
    echo 'Email has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
