<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Wildan Nur Rahman</title>
    
    <!-- Menghubungkan ke file CSS yang sudah dipisah -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Profil Utama -->
        <h1>Selamat Datang di Website Wildan</h1>
        <p>Halo, perkenalkan nama saya <strong>Wildan Nur Rahman</strong>. Saya seorang laki-laki yang saat ini menetap di <strong>Kp.korelet</strong>. Ini adalah halaman web yang saya bangun menggunakan struktur HTML, gaya CSS, dan logika PHP.</p>

        <!-- Bagian Hobi -->
        <h2>Daftar Hobi Saya</h2>
        <ul>
            <li>Main game</li>
            <li>Olahraga</li>
            <li>Membaca</li>
        </ul>

        <!-- Bagian Kontak -->
        <h2>Informasi Kontak</h2>
        <p>Jika ingin terhubung atau berdiskusi, Anda dapat menghubungi saya melalui detail berikut:</p>
        <ul>
            <li><strong>Email:</strong> <a href="mailto:Wnurrahman23@gmail.com">Wnurrahman23@gmail.com</a></li>
            <li><strong>No. Telp:</strong> +62 813-1436-7250</li>
            <li><strong>Alamat:</strong> Kp.korelet</li>
        </ul>

        <!-- Tempat Foto (Ganti URL dengan nama file fotomu jika ada, misal: foto-wildan.jpg) -->
        <img src="https://via.placeholder.com/150" alt="Foto Wildan Nur Rahman" />

        <!-- Formulir -->
        <h2>Formulir Pendaftaran</h2>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <input type="submit" name="submit" value="Daftar">
        </form>

        <?php
        // Logika PHP untuk menangkap dan menampilkan input form pengunjung
        if (isset($_POST['submit'])) {
            $nama_input = htmlspecialchars($_POST['nama']);
            $email_input = htmlspecialchars($_POST['email']);
            
            echo "<div class='hasil-php'>";
            echo "<strong>Pendaftaran Berhasil!</strong><br><br>";
            echo "Nama yang didaftarkan: " . $nama_input . "<br>";
            echo "Email yang digunakan: " . $email_input;
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>