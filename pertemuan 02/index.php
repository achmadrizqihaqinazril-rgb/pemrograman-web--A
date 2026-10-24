<?php
$nama = "Nazril Achmad Rizqi Haqi";
$nim = "2441032;
$prodi = "Teknik Informatika";
$kelas = "A";
$alasan = "Saya mempelajari pemrograman web agar dapat membuat dan mengembangkan website.";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <!-- Kartu Mahasiswa -->
        <div class="card shadow mx-auto" style="max-width: 500px;">

            <!-- Header -->
            <div class="card-header bg-primary text-white text-center">
                <h3>Profil Mahasiswa</h3>
            </div>

            <!-- Isi Kartu -->
            <div class="card-body">

                <!-- Foto dan Nama -->
                <div class="text-center mb-4">

                    <img src="foto.jpg"
                         alt="Foto Eka Ramdani"
                         class="rounded-circle"
                         width="130"
                         height="130"
                         style="object-fit: cover;">

                    <h4 class="mt-3">
                        <?php echo $nama; ?>
                    </h4>

                    <p class="text-muted">
                        Mahasiswa Teknik Informatika
                    </p>

                </div>

                <hr>

                <!-- Data Mahasiswa -->
                <p>
                    <strong>Nama:</strong>
                    <?php echo $nama; ?>
                </p>

                <p>
                    <strong>NIM:</strong>
                    <?php echo $nim; ?>
                </p>

                <p>
                    <strong>Program Studi:</strong>
                    <?php echo $prodi; ?>
                </p>

                <p>
                    <strong>Kelas:</strong>
                    <?php echo $kelas; ?>
                </p>

                <!-- Alasan -->
                <div class="alert alert-info mt-4">
                    <strong>Alasan mempelajari pemrograman web:</strong>
                    <br>
                    <?php echo $alasan; ?>
                </div>

            </div>

            <!-- Footer -->
            <div class="card-footer text-center text-muted">
                Profil Mahasiswa
            </div>

        </div>

    </div>

</body>
</html>