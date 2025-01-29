<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JahitOnline - Manajemen Pesanan Jahit</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS (Animation) CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
    /* Navbar */
    .navbar {
        transition: background 0.3s;
    }

    .navbar.scrolled {
        background: rgba(0, 0, 0, 0.9);
    }

    /* Hero Section */
    .hero {
        background: url('img/bg1.jpg') center/cover no-repeat;
        color: white;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-size: cover;
        /* Menyesuaikan gambar agar tidak terlalu besar */
    }

    .hero img {
        max-width: 90%;
        /* Mengurangi ukuran gambar agar tidak memenuhi seluruh layar */
        height: auto;
    }

    /* Fitur Section */
    .icon-box {
        padding: 20px;
        border-radius: 10px;
        transition: 0.3s;
    }

    .icon-box:hover {
        background: #ffc107;
        color: white;
    }

    /* Tombol */
    .btn-warning {
        background: linear-gradient(45deg, #9b59b6, #ff66b2);
        /* Gradasi ungu ke pink */
        border: none;
        color: white;
        transition: background 0.3s;
    }

    .btn-warning:hover {
        background: linear-gradient(45deg, #ff66b2, #9b59b6);
        /* Efek hover berbalik arah */
    }

    /* Footer */
    footer {
        background: #222;
        color: white;
        padding: 20px 0;
    }

    /* Hero Section */
    .hero {
        background: url('img/bg1.jpg') center/cover no-repeat;
        color: white;
        height: 70vh;
        /* Mengatur tinggi hero section agar lebih pendek */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-size: cover;
        /* Menyesuaikan gambar agar tidak terlalu besar */
    }

    .hero img {
        max-width: 90%;
        /* Mengurangi ukuran gambar agar tidak memenuhi seluruh layar */
        height: auto;
    }

    /* Fitur */
    #features {
        background-color: #f0f0f0;
    }

    .card {
        background: linear-gradient(45deg, #9b59b6, #ff66b2);
        /* Gradasi ungu ke pink */
        color: white;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-10px);
        /* Efek hover naik */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        /* Efek bayangan saat hover */
    }

    .card-body {
        padding: 30px;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
    }

    .text-warning {
        color: rgb(255, 255, 255) !important;
    }

    /* Adding padding and margins for responsiveness */
    @media (max-width: 768px) {
        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.125rem;
        }

        .card-text {
            font-size: 0.9rem;
        }
    }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-cut"></i> HM Sewing Collection</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Tim</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning text-white" href="index.php">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex justify-content-center align-items-center" style="background-color: #f8f9fa;">
        <div data-aos="fade-up">
            <h1 class="display-4 fw-bold">HM Sewing Collection</h1>
            <p class="lead">Solusi Digital untuk Mengelola Pesanan Jahit Anda dengan Mudah</p>
            <a href="aplikasi.php" class="btn btn-warning btn-lg mt-3">Mulai Sekarang</a>
        </div>
    </section>


    <section id="features" class="py-5" style="background-color: #f0f0f0;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2>Fitur Unggulan</h2>
                <p class="lead">Fitur-fitur yang membuat HM Sewing Collection menjadi solusi ideal untuk penjahit.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="zoom-in">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-clipboard-list fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Manajemen Pesanan</h5>
                            <p class="card-text">Kelola pesanan dengan mudah, dari pendaftaran hingga selesai.</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-tasks fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Pelacakan Status</h5>
                            <p class="card-text">Pantau status pesanan pelanggan secara real-time.</p>
                        </div>
                    </div>
                </div>
                <div class="col" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-chart-bar fa-3x text-warning mb-3"></i>
                            <h5 class="card-title">Laporan Terintegrasi</h5>
                            <p class="card-text">Analisis performa bisnis dengan laporan otomatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang -->
    <section id="about" class="py-5" style="background-color:rgb(255, 255, 255);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="img/logo.jpeg" class="img-fluid rounded" alt="Tentang HM Sewing Collection">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2>Tentang HM Sewing Collection</h2>
                    <p>HM Sewing Collection adalah platform berbasis web yang membantu para penjahit mengelola pesanan
                        secara
                        digital dengan efisien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim Pengembang -->
    <section id="team" class="py-5" style="background-color: #e9ecef;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2>Tim Pengembang</h2>
                <p class="lead">Kami tim yang berdedikasi untuk menghadirkan solusi terbaik bagi Anda.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 text-center" data-aos="zoom-in">
                    <div class="card p-4 shadow align-items-center">
                        <!-- Foto profil dengan ukuran lebih kecil -->
                        <img src="img/halimah.jpeg" class="card-img-top rounded-circle" alt="Halimah Melala"
                            style="max-width: 150px;">
                        <!-- Nama Pengembang -->
                        <p class="mt-3">Halimah Melala</p>
                        <p>Web Developer & Designer</p>
                        <a href="https://linkedin.com" class="btn btn-warning btn-sm">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="text-center" style="background-color: #343a40; color: white; padding: 20px 0;">
        <p>© 2025 HM Sewing Collection. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap & AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    window.addEventListener('scroll', function() {
        document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
    });
    </script>

</body>


</html>