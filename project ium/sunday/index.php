<?php include 'header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --coffee-dark: #3e2723;
        --coffee-medium: #6f4e37;
        --accent: #d4a373;
        --bg-soft: #fdfbfb;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-soft);
    }

    /* HERO SECTION */
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 80px 0;
        background: radial-gradient(circle at top right, #efe6dc, #f8f5f2);
        overflow: hidden;
    }

    .hero-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
    }

    /* LEFT CONTENT */
    .content-left {
        flex: 1;
    }

    .content-left h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.8rem;
        font-weight: 700;
        line-height: 1.1;
        color: var(--coffee-dark);
        margin-bottom: 25px;
    }

    .content-left p {
        font-size: 1.15rem;
        margin-bottom: 35px;
        color: #5d5d5d;
        line-height: 1.8;
        max-width: 500px;
    }

    /* CTA BUTTONS */
    .cta-buttons .btn {
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    .btn-main {
        background-color: var(--coffee-medium);
        color: white;
        border: none;
        box-shadow: 0 10px 20px rgba(111, 78, 55, 0.2);
    }

    .btn-main:hover {
        background-color: var(--coffee-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(111, 78, 55, 0.3);
    }

    .btn-outline-coffee {
        background-color: transparent;
        color: var(--coffee-medium);
        border: 2px solid var(--coffee-medium);
        margin-left: 15px;
    }

    .btn-outline-coffee:hover {
        background-color: var(--coffee-medium);
        color: white;
    }

    /* STATS */
    .stats {
        display: flex;
        gap: 40px;
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid rgba(0,0,0,0.05);
    }

    .stat-item h2 {
        color: var(--coffee-dark);
        font-weight: 800;
        margin-bottom: 0;
        font-size: 2rem;
    }

    .stat-item p {
        margin: 0;
        font-size: 0.85rem;
        color: var(--accent);
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 1px;
    }

    /* RIGHT IMAGE & DECORATION */
    .content-right {
        flex: 1;
        position: relative;
        display: flex;
        justify-content: center;
    }

    .image-blob {
        position: relative;
        width: 100%;
        max-width: 500px;
        z-index: 2;
    }

    .image-blob img {
        width: 100%;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; /* Organic Shape */
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        animation: morph 8s ease-in-out infinite;
    }

    .deco-circle {
        position: absolute;
        width: 300px;
        height: 300px;
        background: var(--accent);
        filter: blur(80px);
        opacity: 0.2;
        z-index: 1;
        top: 10%;
        right: 0;
    }

    /* ANIMATIONS */
    @keyframes morph {
        0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        50% { border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%; }
        100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
        .hero-container {
            flex-direction: column;
            text-align: center;
            padding-top: 40px;
        }
        .content-left h1 { font-size: 2.8rem; }
        .content-left p { margin: 20px auto; }
        .stats { justify-content: center; }
        .btn-outline-coffee { margin-left: 0; margin-top: 15px; }
        .cta-buttons { display: flex; flex-direction: column; align-items: center; }
    }
</style>

<main class="hero-section">
    <div class="container hero-container">

        <div class="content-left">
            <span class="badge bg-light text-dark mb-3 px-3 py-2 rounded-pill shadow-sm" style="color: var(--coffee-medium) !important; font-weight: 600;">
                <i class="fas fa-coffee me-2"></i>The Best Coffee in Town
            </span>
            <h1>Nikmati Momen<br>Terbaik Bersama<br>Sunday Street.</h1>
            <p>
                Temukan kenyamanan dari biji kopi pilihan dan camilan segar, 
                yang diracik khusus untuk menemani setiap cerita dan inspirasimu hari ini.
            </p>

            <div class="cta-buttons">
                <a href="menu.php" class="btn btn-main">
                    <i class="fas fa-utensils me-2"></i>Pesan Sekarang
                </a>
                <a href="tentang.php" class="btn btn-outline-coffee">
                    Tentang Kami
                </a>
            </div>

            <div class="stats">
                <div class="stat-item">
                    <h2>15+</h2>
                    <p>Varian Menu</p>
                </div>
                <div class="stat-item">
                    <h2>10K+</h2>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item">
                    <h2>4.8</h2>
                    <p>Customer Rating</p>
                </div>
            </div>
        </div>

        <div class="content-right">
            <div class="deco-circle"></div>
            <div class="image-blob">
                <img src="img/694c56ba720f2.jpg" alt="Sunday Street Coffee Specialty">
            </div>
        </div>
        
    </div>
</main>

<?php include 'footer.php'; ?>

