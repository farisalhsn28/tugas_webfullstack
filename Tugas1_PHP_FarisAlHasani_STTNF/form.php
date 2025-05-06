<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>

    <h2>Form Nilai Ujian</h2>

    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nilai">Nilai Ujian:</label><br>
        <input type="number" id="nilai" name="nilai" required><br><br>

        <input type="submit" value="Kirim">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nilai = $_POST['nilai'];

    // Menampilkan informasi yang dimasukkan
    echo "<h3>Hasil Form:</h3>";
    echo "Nama: $nama<br>";
    echo "Email: $email<br>";
    echo "Nilai Ujian: $nilai<br><br>";

    // Struktur kendali untuk nilai ujian
    if ($nilai > 70) {
        echo "Status: Lulus";
    } else {
        echo "Status: Remedial";
    }
}
?>
