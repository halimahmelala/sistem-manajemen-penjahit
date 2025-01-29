<?php
include 'database.php';

// Inisialisasi variabel untuk notifikasi
$success = false;
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $pesanan = $_POST['pesanan'];
    $status = "Menunggu";

    $query = "INSERT INTO pesanan (nama_pelanggan, pesanan, status) VALUES ('$nama_pelanggan', '$pesanan', '$status')";
    if (mysqli_query($conn, $query)) {
        $success = true; // Tandai berhasil
    } else {
        $error = "Gagal menambahkan pesanan: " . mysqli_error($conn); // Tangkap pesan kesalahan
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pesanan Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 80px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #6f42c1;
        color: white;
        font-size: 1.5rem;
        text-align: center;
        padding: 20px;
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        padding: 30px;
    }

    .form-label {
        font-weight: bold;
        color: #495057;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: none;
        transition: 0.3s;
    }

    .form-control:focus {
        border-color: #6f42c1;
        box-shadow: 0 0 5px rgba(111, 66, 193, 0.5);
    }

    .btn-warning {
        background-color: #6f42c1;
        border-color: #6f42c1;
    }

    .btn-warning:hover {
        background-color: #5a32a3;
        border-color: #5a32a3;
    }

    .text-primary {
        color: #6f42c1 !important;
    }

    .alert {
        border-radius: 10px;
        margin-top: 20px;
    }

    .card-footer {
        text-align: center;
        font-size: 0.9rem;
        color: #6c757d;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .container {
            margin-top: 60px;
        }
    }
    </style>
</head>

<body>

    <!-- Container -->
    <div class="container my-5">
        <!-- Judul Halaman -->
        <div class="text-center mb-4">
            <h1 class="text-primary">Tambah Pesanan Baru</h1>
            <p class="text-secondary">Isi formulir di bawah ini untuk menambahkan pesanan pelanggan baru</p>
        </div>

        <!-- Form Tambah Pesanan -->
        <div class="card shadow-lg mx-auto" style="max-width: 600px;">
            <div class="card-header">
                <i class="fas fa-plus-circle me-2"></i>Tambah Pesanan Baru
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <!-- Nama Pelanggan -->
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control"
                            placeholder="Masukkan nama pelanggan" required>
                    </div>

                    <!-- Pesanan -->
                    <div class="mb-3">
                        <label for="pesanan" class="form-label">Pesanan:</label>
                        <textarea name="pesanan" id="pesanan" class="form-control" rows="5"
                            placeholder="Masukkan detail pesanan" required></textarea>
                    </div>

                    <!-- Tombol -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning btn-lg">
                            <i class="fas fa-plus me-2"></i>Tambah Pesanan
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p>© 2025 HM Sewing Collection. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    <script>
    // SweetAlert2 Notification
    <?php if ($success): ?>
    Swal.fire({
        icon: 'success',
        title: 'Pesanan Berhasil Ditambahkan!',
        text: 'Pesanan baru telah berhasil disimpan.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = 'aplikasi.php'; // Arahkan ke halaman aplikasi
        }
    });
    <?php elseif (!empty($error)): ?>
    Swal.fire({
        icon: 'error',
        title: 'Gagal Menambahkan Pesanan!',
        text: '<?= $error ?>',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Coba Lagi'
    });
    <?php endif; ?>
    </script>
</body>

</html>