<?php
include 'header.php';
// Pastikan session_start sudah ada di header.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - SUNDAY STREET COFFEE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-contact {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/hero-bg.jpg');
            background-size: cover;
            color: white;
            padding: 100px 0;
        }

        .contact-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
        }

        .icon-box {
            width: 50px;
            height: 50px;
            background: #ffc107;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .btn-send {
            background-color: #008927;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
        }

        .btn-send:hover {
            background-color: #006b1f;
            color: white;
        }
    </style>
</head>

<body>

    <div class="hero-contact text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Hubungi Kami</h1>
            <p class="lead">Punya pertanyaan atau sekedar ingin menyapa? Kami siap membantu.</p>
        </div>
    </div>

    <div class="container mt-n5 mb-5" style="margin-top: -50px;">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card contact-card shadow p-4 h-100">
                    <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                    <h5 class="fw-bold">Lokasi Kami</h5>
                    <p class="text-muted small">Jl. Jend. Sudirman, Nganguk, Kramat,
                        Kec. Kota Kudus, Kabupaten Kudus,
                        Jawa Tengah 59312</p>

                    <div class="icon-box"><i class="fas fa-envelope"></i></div>
                    <h5 class="fw-bold">Email</h5>
                    <p class="text-muted small">hello@sundaystreetcoffee.com</p>

                    <div class="icon-box"><i class="fas fa-phone"></i></div>
                    <h5 class="fw-bold">WhatsApp</h5>
                    <p class="text-muted small">0812-4567-8910</p>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card contact-card shadow p-4">
                    <h4 class="fw-bold mb-4">Kirim Pesan</h4>
                    <form action="proses_contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-3" name="nama" placeholder="Contoh: Budi Santoso" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold">Alamat Email</label>
                                <input type="email" class="form-control rounded-3" name="email" placeholder="budi@email.com" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Subjek</label>
                            <input type="text" class="form-control rounded-3" name="subjek" placeholder="Tanya Promo / Kerjasama" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Pesan Anda</label>
                            <textarea class="form-control rounded-3" name="pesan" rows="5" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-send shadow">
                            <i class="fas fa-paper-plane me-2"></i> Kirim Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    // Notifikasi setelah kirim pesan
    if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <script>
            Swal.fire('Terkirim!', 'Pesan Anda berhasil kami terima.', 'success');
        </script>
    <?php endif; ?>

    <?php include 'footer.php'; ?>