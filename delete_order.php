<?php
include 'database.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Periksa apakah ID ada
if (isset($id)) {
    // Query untuk menghapus data
    $query = "DELETE FROM pesanan WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Jika berhasil, arahkan kembali ke aplikasi.php dengan notifikasi sukses
        header("Location: aplikasi.php?status=success");
    } else {
        // Jika gagal, arahkan kembali ke aplikasi.php dengan notifikasi error
        header("Location: aplikasi.php?status=error");
    }
} else {
    // Jika ID tidak valid, arahkan ke halaman aplikasi.php
    header("Location: aplikasi.php");
}

exit();
?>