<?php
include 'database.php';

// Ambil data pesanan
$query = "SELECT * FROM pesanan ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Pesanan Jahit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
    /* Styling untuk Halaman */
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 100px;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    /* Tabel dengan border dan warna yang lebih terang */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .table th {
        background-color: #6f42c1;
        color: white;
    }

    .badge {
        font-size: 1rem;
    }

    /* Tombol Tambah Pesanan */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    /* Styling SweetAlert2 */
    .swal2-popup {
        font-family: 'Arial', sans-serif;
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

    /* Responsivitas */
    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
        }
    }
    </style>
</head>

<body class="bg-light">

    <!-- Container -->
    <div class="container my-5">
        <!-- Judul Halaman -->
        <div class="text-center mb-4">
            <h1 class="text-primary">Daftar Pesanan Jahit</h1>
            <p class="text-secondary">Kelola semua pesanan jahit pelanggan Anda dengan mudah</p>
        </div>

        <!-- Tombol Tambah Pesanan -->
        <div class="mb-4">
            <a href="add_order.php" class="btn btn-success">
                <i class="fas fa-plus me-2"></i>Tambah Pesanan Baru
            </a>
        </div>

        <!-- Tabel Pesanan -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Pesanan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$no}</td>
                                <td>{$row['nama_pelanggan']}</td>
                                <td>{$row['pesanan']}</td>
                                <td>
                                    <span class='badge bg-" . ($row['status'] == 'Selesai' ? 'success' : ($row['status'] == 'Proses' ? 'warning' : 'secondary')) . "'>
                                        {$row['status']}
                                    </span>
                                </td>
                                <td>
                                    <a href='update_status.php?id={$row['id']}' class='btn btn-sm btn-primary me-2'>
                                        <i class='fas fa-edit'></i> Edit
                                    </a>
                                    <button class='btn btn-sm btn-danger' onclick='confirmDelete({$row['id']})'>
                                        <i class='fas fa-trash'></i> Hapus
                                    </button>
                                </td>
                              </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    <script>
    // SweetAlert2 Notifikasi untuk Status
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Pesanan berhasil dihapus.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    });
    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
    Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Terjadi kesalahan saat menghapus pesanan.',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
    <?php endif; ?>

    // Fungsi konfirmasi penghapusan
    function confirmDelete(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data pesanan ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `delete_order.php?id=${id}`; // Arahkan ke delete_order.php
            }
        });
    }
    </script>
</body>

</html>