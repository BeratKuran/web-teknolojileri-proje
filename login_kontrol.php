<?php
// Ödev kuralına göre öğrenci bilgilerini tanımlıyoruz
$dogru_email = "b2412100001@sakarya.edu.tr"; // BURAYA KENDİ NO'NU YAZ
$dogru_sifre = "b2412100001";              // BURAYA KENDİ NO'NU YAZ

if ($_POST) {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['sifre'];

    if ($gelen_email == $dogru_email && $gelen_sifre == $dogru_sifre) {
        // Başarılı giriş
        echo "<div style='text-align:center; margin-top:50px;'>";
        echo "<h1>Hoşgeldiniz " . substr($dogru_sifre, 0) . "</h1>";
        echo "<p>Giriş işleminiz başarıyla gerçekleşti.</p>";
        echo "<a href='index.html'>Ana Sayfaya Dön</a>";
        echo "</div>";
    } else {
        // Hatalı giriş - Login sayfasına yönlendirme
        header("Location: login.html?hata=true");
        exit();
    }
}
?>