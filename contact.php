<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Inisialisasi PHPMailer
if(isset($_POST["Send"])){
    $mail = new PHPMailer(true);

    // Konfigurasi SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Ganti dengan server SMTP yang sesuai
    $mail->SMTPAuth = true;
    $mail->Username = 'Alquinsha1998@gmail.com'; // Ganti dengan alamat email Anda
    $mail->Password = 'zinxixwoerxtpece'; // Ganti dengan kata sandi email Anda zinx ixwo erxt pece
    $mail->SMTPSecure = 'ssl'; // Anda dapat mengganti ini menjadi 'ssl' jika sesuai
    $mail->Port = 465; // Ganti dengan port SMTP yang sesuai

    // Pengirim dan penerima
    $mail->setFrom('Alquinsha1998@example.com'); // Ganti dengan alamat penerima
    $mail->addAddress($_POST["Email"]); 

    // Isi email
    $mail->isHTML(true);
    $mail->Subject = $_POST["Name"];
    $mail->Body = $_POST["Message"];

    // Kirim email
    $mail->send();
    
    echo
    
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'Ghrayri-color.html';
    document.location.href = 'Ghrayri-gray.html';
    </script>
    ";

}

?>
