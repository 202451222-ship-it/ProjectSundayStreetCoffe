<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lokasi - SUNDAY STREET COFFEE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .hero-location { 
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/hero-location.jpg'); 
            background-size: cover; 
            background-position: center;
            color: white; 
            padding: 80px 0; 
        }
        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: -50px;
            background: white;
            padding: 10px;
        }
        .info-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .info-card:hover {
            transform: translateY(-5px);
        }
        .icon-circle {
            width: 60px;
            height: 60px;
            background-color: #ffc107;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-size: 24px;
        }
        .btn-direction {
            background-color: #008927;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        .btn-direction:hover {
            background-color: #006b1f;
            color: white;
        }
    </style>
</head>
<body>

<div class="hero-location text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">Temukan Kami</h1>
        <p class="lead">Kopi terbaik selalu mudah ditemukan. Kunjungi kami di jantung Kota Kudus.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="map-container mb-5">
        <div class="ratio ratio-21x9">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.716124403166!2d110.8443916742517!3d-6.804306366551603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c4d708309199%3A0x6291a92e2729938b!2sJl.%20Jend.%20Sudirman%2C%20Kudus!5e0!3m2!1sid!2sid!4v1703430000000!5m2!1sid!2sid" 
                style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="card h-100 info-card p-4">
                <div class="card-body">
                    <div class="icon-circle shadow-sm"><i class="fas fa-map-marker-alt"></i></div>
                    <h5 class="fw-bold">Alamat Utama</h5>
                    <p class="text-muted small mb-0">
                        Jl. Jend. Sudirman, Nganguk, Kramat, <br>
                        Kec. Kota Kudus, Kabupaten Kudus, <br>
                        Jawa Tengah 59312
                    </p>
                    <a href="https://maps.google.com" target="_blank" class="btn-direction">
                        <i class="fas fa-route me-2"></i>Petunjuk Arah
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 info-card p-4">
                <div class="card-body">
                    <div class="icon-circle shadow-sm"><i class="fas fa-phone-alt"></i></div>
                    <h5 class="fw-bold">Hubungi Kami</h5>
                    <p class="text-muted small">
                        <strong>WhatsApp:</strong> 0812-4567-8910<br>
                        <strong>Email:</strong> halo@sundaystreetcoffee.com
                    </p>
                    <p class="text-muted small mt-3">
                        <i class="far fa-clock me-1"></i> Buka Setiap Hari: 18.00 - 02.00
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 info-card p-4">
                <div class="card-body">
                    <div class="icon-circle shadow-sm"><i class="fas fa-motorcycle"></i></div>
                    <h5 class="fw-bold">Akses & Parkir</h5>
                    <p class="text-muted small">
                        Tersedia area parkir luas untuk: <br>
                        <strong>Sepeda Motor, Mobil, & Sepeda.</strong>
                    </p>
                    <p class="text-muted small mt-2">
                        Lokasi strategis di pinggir jalan raya utama Sudirman.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>