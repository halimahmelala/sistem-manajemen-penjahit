<?php
include 'database.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = $_POST['status'];
    $query = "UPDATE pesanan SET status = '$status' WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header('Location: aplikasi.php');
    } else {
        echo "Gagal mengupdate status: " . mysqli_error($conn);
    }
}

// Ambil data pesanan
$query = "SELECT * FROM pesanan WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status Pesanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    /* Styling untuk Halaman */
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 100px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #6f42c1;
        color: white;
        font-size: 1.25rem;
        text-align: center;
        padding: 15px;
    }

    .card-body {
        padding: 30px;
    }

    .form-label {
        font-weight: bold;
        color: #495057;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        border: 1px solid #ccc;
        box-shadow: none;
        transition: 0.3s;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #6f42c1;
        box-shadow: 0 0 5px rgba(111, 66, 193, 0.5);
    }

    .btn-primary {
        background-color: #6f42c1;
        border-color: #6f42c1;
    }

    .btn-primary:hover {
        background-color: #5a32a3;
        border-color: #5a32a3;
    }

    /* Responsivitas */
    @media (max-width: 768px) {
        .container {
            margin-top: 60px;
        }
    }
    </style>
</head>

<body class="bg-light">

    <!-- Container -->
    <div class="container my-5">
        <!-- Judul Halaman -->
        <div class="text-center mb-4">
            <h1 class="text-primary">Update Status Pesanan</h1>
            <p class="text-secondary">Ubah status pesanan pelanggan dengan mudah</p>
        </div>

        <!-- Form Update Status -->
        <div class="card shadow-lg mx-auto" style="max-width: 500px;">
            <div class="card-header">
                <i class="fas fa-edit me-2"></i>Update Status Pesanan
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <!-- Nama Pelanggan -->
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama Pelanggan:</label>
                        <input type="text" id="nama_pelanggan" class="form-control"
                            value="<?= $row['nama_pelanggan']; ?>" disabled>
                    </div>

                    <!-- Detail Pesanan -->
                    <div class="mb-3">
                        <label for="pesanan" class="form-label">Detail Pesanan:</label>
                        <textarea id="pesanan" class="form-control" rows="3" disabled><?= $row['pesanan']; ?></textarea>
                    </div>

                    <!-- Status Pesanan -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Pesanan:</label>
                        <select name="status" id="status" class="form-select">
                            <option value="Menunggu" <?= $row['status'] == 'Menunggu' ? 'selected' : '' ?>>Menunggu
                            </option>
                            <option value="Proses" <?= $row['status'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
                            <option value="Selesai" <?= $row['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai
                            </option>
                        </select>
                    </div>

                    <!-- Tombol Update -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Update Status
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>