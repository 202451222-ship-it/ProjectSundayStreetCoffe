<?php 




?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Pesanan - Sunday Street Coffee</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --coffee-dark: #3e2723;
            --coffee-medium: #6f4e37;
            --coffee-light: #f8f5f2;
            --accent: #d4a373;
            --success: #2ecc71;
            --text-muted: #888;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url("img/latar.jpg");
            background-size: cover;
            background-repeat: no-repeat; 
            background-position: center; 
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .tracking-card {
            background: white;
            width: 100%;
            max-width: 450px;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* Header Section */
        .tracking-header {
            background-color: var(--coffee-dark);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .tracking-header h2 {
            font-family: 'Playfair Display', serif;
            margin: 0;
            font-size: 1.5rem;
        }

        .order-id {
            display: block;
            font-size: 0.8rem;
            opacity: 0.7;
            letter-spacing: 2px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .estimated-time {
            background: rgba(255,255,255,0.1);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px;
            margin-top: 15px;
            font-weight: 600;
            border: 1px dashed rgba(255,255,255,0.3);
        }

        /* Main Tracking Body */
        .tracking-body {
            padding: 40px 30px;
        }

        .step-container {
            position: relative;
            /* height: 50vh; */
        }

        /* Garis Vertikal */
        .step-container::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            width: 2px;
            height: 100%;
            background: #eee;
            z-index: 1;
        }

        .step {
            position: relative;
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            z-index: 2;
        }

        .step-icon {
            width: 42px;
            height: 42px;
            background: white;
            border: 2px solid #eee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            margin-right: 20px;
            transition: all 0.3s ease;
        }

        .step-content h4 {
            margin: 0;
            font-size: 1rem;
            color: #444;
        }

        .step-content p {
            margin: 5px 0 0;
            font-size: 0.85rem;
            color: var(--text-muted);
            line-height: 1.4;
        }

        /* Status: Selesai */
        .step.completed .step-icon {
            background: var(--success);
            border-color: var(--success);
            color: white;
        }
        
        /* Status: Sedang Berjalan */
        .step.active .step-icon {
            background: white;
            border-color: var(--coffee-medium);
            color: var(--coffee-medium);
            box-shadow: 0 0 0 4px rgba(111, 78, 55, 0.1);
            animation: pulse 2s infinite;
        }

        .step.active h4 {
            color: var(--coffee-medium);
            font-weight: 600;
        }

        /* Order Details */
        .order-summary {
            background: var(--coffee-light);
            border-radius: 20px;
            padding: 20px;
            margin-top: 10px;
        }

        .summary-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
            display: block;
            color: var(--coffee-dark);
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            margin-bottom: 8px;
            color: #555;
        }

        .total-price {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
            font-weight: 600;
            color: var(--coffee-dark);
        }

        .btn-home {
            display: block;
            text-align: center;
            background: var(--coffee-medium);
            color: white;
            text-decoration: none;
            padding: 15px;
            border-radius: 50px;
            margin-top: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn-home:hover {
            background: var(--coffee-dark);
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

    </style>
</head>
<body>

<div class="tracking-card">
    <div class="tracking-header">
        <span class="order-id">ID Pesanan: #SSC2025001</span>
        <h2>Pesananmu Sedang Dibuat</h2>
        <div class="estimated-time">
            <i class="far fa-clock me-2"></i> Estimasi: 12 Menit lagi
        </div>
    </div>

    <div class="tracking-body">
        <div class="step-container">
            
            <div class="step completed">
                <div class="step-icon">
                    <i class="fas fa-check"></i>
                </div>
                <div class="step-content">
                    <h4>Pesanan Diterima</h4>
                    <p>Kami sudah menerima pesananmu dan sedang menyiapkannya.</p>
                </div>
            </div>

            <div class="step active">
                <div class="step-icon">
                    <i class="fas fa-coffee"></i>
                </div>
                <div class="step-content">
                    <h4>Sedang Diracik</h4>
                    <p>Barista kami sedang meracik biji kopi pilihan untukmu.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="step-content">
                    <h4>Siap Diambil</h4>
                    <p>Pesanan siap di meja bar. Tunjukkan halaman ini ke barista.</p>
                </div>
            </div>

        </div>

        <div class="order-summary">
            <span class="summary-title">Ringkasan Menu</span>
            <div class="order-item">
                <span>1x Kopi Susu Gula Aren</span>
                <span>Rp 18.000</span>
            </div>
            <div class="order-item">
                <span>1x Dimsum Original</span>
                <span>Rp 15.000</span>
            </div>
            <div class="order-item total-price">
                <span>Total Pembayaran</span>
                <span>Rp 33.000</span>
            </div>
        </div>

        <a href="index.php" class="btn-home">Kembali ke Beranda</a>
    </div>
</div>

</body>
</html>