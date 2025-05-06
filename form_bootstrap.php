<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <!-- Menambahkan CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Form Nilai Ujian</h2>

            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai Ujian:</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Mengambil data dari form
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $nilai = $_POST['nilai'];

                // Menampilkan hasil inputan
                echo "<div class='alert alert-info mt-4'>";
                echo "<h3>Hasil Form:</h3>";
                echo "Nama: $nama<br>";
                echo "Email: $email<br>";
                echo "Nilai Ujian: $nilai<br><br>";

                // Struktur kendali untuk nilai ujian
                if ($nilai > 70) {
                    echo "Status: <span class='text-success'>Lulus</span>";
                } else {
                    echo "Status: <span class='text-danger'>Remedial</span>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<!-- Menambahkan CDN Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
