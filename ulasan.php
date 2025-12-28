<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ulasan Pelanggan - SUNDAY STREET COFFEE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f4f7f6; }
        .hero-review { 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/hero-review.jpg'); 
            background-size: cover; 
            background-position: center;
            color: white; 
            padding: 80px 0; 
        }
        .review-card {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            background: white;
            position: relative;
            overflow: hidden;
        }
        .review-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .avatar {
            width: 60px;
            height: 60px;
            background: #ffc107;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .quote-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 40px;
            color: rgba(0,0,0,0.05);
        }
        .star-rating { color: #ffc107; font-size: 0.9rem; }
        .btn-review {
            background-color: #008927;
            color: white;
            border-radius: 30px;
            padding: 12px 35px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-review:hover { background-color: #006b1f; color: white; transform: scale(1.05); }
    </style>
</head>
<body>

<div class="hero-review text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Apa Kata Mereka?</h1>
        <p class="lead">Cerita pelanggan kami tentang hangatnya kopi dan suasana di Sunday Street Coffee.</p>
        <a href="contact.php" class="btn btn-review mt-3 shadow-sm">
            <i class="fas fa-edit me-2"></i>Berikan Ulasan
        </a>
    </div>
</div>

<div class="container my-5 py-4">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 review-card p-4">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="card-body p-0">
                    <div class="avatar shadow-sm">R</div>
                    <h5 class="fw-bold mb-1">Rina Susanti</h5>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <p class="card-text text-muted italic">"Kopi latte nya sangat creamy dan tempatnya nyaman banget buat kerja tugas!"</p>
                    <hr class="my-3 opacity-25">
                    <small class="text-uppercase fw-bold text-secondary" style="font-size: 0.7rem;">12 Desember 2025</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 review-card p-4">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="card-body p-0">
                    <div class="avatar shadow-sm" style="background:#28a745;">A</div>
                    <h5 class="fw-bold mb-1">Andi Wijaya</h5>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="card-text text-muted">"Makanan cepat saji nya enak, porsinya pas, dan harga sangat terjangkau untuk mahasiswa."</p>
                    <hr class="my-3 opacity-25">
                    <small class="text-uppercase fw-bold text-secondary" style="font-size: 0.7rem;">10 Desember 2025</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 review-card p-4">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="card-body p-0">
                    <div class="avatar shadow-sm" style="background:#17a2b8;">S</div>
                    <h5 class="fw-bold mb-1">Siti Aulia</h5>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <p class="card-text text-muted">"Tempat cozy banget, playlist lagunya enak-enak, cocok buat ngobrol santai sore-sore."</p>
                    <hr class="my-3 opacity-25">
                    <small class="text-uppercase fw-bold text-secondary" style="font-size: 0.7rem;">08 Desember 2025</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 review-card p-4">
                <i class="fas fa-quote-right quote-icon"></i>
                <div class="card-body p-0">
                    <div class="avatar shadow-sm" style="background:#6f42c1;">V</div>
                    <h5 class="fw-bold mb-1">Vanss</h5>
                    <div class="star-rating mb-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                    </div>
                    <p class="card-text text-muted">"Jos jiss! Kopinya nendang, pelayanan juga ramah dan cepat."</p>
                    <hr class="my-3 opacity-25">
                    <small class="text-uppercase fw-bold text-secondary" style="font-size: 0.7rem;">01 Desember 2025</small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>