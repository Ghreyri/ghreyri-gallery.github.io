<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'phpMailer/SMTP.php'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // Konfigurasi PHPMailer
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com'; // Ganti dengan server SMTP yang sesuai fnde juky rsdx wxqm
    $mail->SMTPAuth = true;
    $mail->Username = 'Alquinsha1998@gmail.com'; // Ganti dengan alamat email Gmail Anda
    $mail->Password = '123Manufaktur'; // Ganti dengan kata sandi Gmail Anda
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Pengaturan email
    $mail->setFrom('Alquinsha1998@gmail.com');
    $mail->addAddress($mail); // Ganti dengan alamat email tujuan
    $mail->Subject = 'Pesan dari ' . $name;
    $mail->Body = $message;

    try {
        $mail->send();
        echo 'Pesan Anda telah terkirim.';
    } catch (Exception $e) {
        echo 'Pesan gagal terkirim. Error: ' . $mail->ErrorInfo;
    }
}
?>
