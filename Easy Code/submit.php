<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $q1 = htmlspecialchars($_POST['q1']);

    // Isi email
    $to = "davidpanjaitan555@gmail.com"; // Ganti dengan emailmu
    $subject = "Jawaban Kuis dari $name";
    $message = "Nama: $name\nJawaban 1: $q1";
    $headers = "From: kuis@website.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Jawaban berhasil dikirim!</h1>";
    } else {
        echo "<h1>Gagal mengirim jawaban. Coba lagi.</h1>";
    }
}
?>
