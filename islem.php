<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonuçları | Berat Kuran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Gönderilen Form Verileri</h3>
            </div>
            <div class="card-body">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Formdan gelen verileri değişkenlere atıyoruz
                    $adsoyad = htmlspecialchars($_POST['adsoyad']);
                    $email = htmlspecialchars($_POST['email']);
                    $mesaj = htmlspecialchars($_POST['mesaj']);

                    // Verileri ekrana düzenli bir tablo veya liste şeklinde yazdırıyoruz
                    echo "<ul class='list-group'>";
                    echo "<li class='list-group-item'><strong>Ad Soyad:</strong> " . $adsoyad . "</li>";
                    echo "<li class='list-group-item'><strong>E-posta:</strong> " . $email . "</li>";
                    echo "<li class='list-group-item'><strong>Mesaj:</strong> " . $mesaj . "</li>";
                    echo "</ul>";
                    
                    echo "<div class='alert alert-success mt-4'>Veriler sunucu tarafında PHP ile başarıyla işlendi.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Hata: Form verileri gönderilemedi!</div>";
                }
                ?>
                <a href="iletisim.html" class="btn btn-secondary mt-3">Geri Dön</a>
            </div>
        </div>
    </div>
</body>
</html>