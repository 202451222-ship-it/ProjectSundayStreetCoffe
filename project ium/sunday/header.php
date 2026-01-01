<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUNDAY STREET COFFEE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .nav-link {
            font-weight: 500;
            margin-right: 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #c49b63 !important;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php">
                SUNDAY STREET COFFEE
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ulasan.php">ULASAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lokasi.php">LOKASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        // Inisialisasi jumlah pesanan
                        $jumlah_keranjang = 0;

                        // Hitung total item unik atau total qty dalam keranjang
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                // Jika ingin menghitung total porsi (misal 3 Amerikano + 3 Kopi Susu = 6)
                                $jumlah_keranjang += $item['qty'];

                                // ATAU jika hanya ingin menghitung jenis menu (misal 3 Amerikano + 3 Kopi Susu = 2 jenis)
                                // Gunakan: $jumlah_keranjang = count($_SESSION['cart']);
                            }
                        }
                        ?>

                        <a href="checkout.php" class="btn btn-success rounded-pill shadow-sm">
                            Lihat Pesanan <span class="badge bg-white text-success ms-1"><?php echo $jumlah_keranjang; ?></span>
                        </a>

                        <a href="info-order.php" class="btn btn-success rounded-pill shadow-sm">
                            Info Pesanan<span class="badge bg-white text-success ms-1"><?php ; ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>