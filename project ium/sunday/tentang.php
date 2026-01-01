<?php include 'header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    :root {
        --coffee-dark: #3e2723;
        --coffee-medium: #6f4e37;
        --coffee-light: #f8f5f2;
        --accent: #d4a373;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--coffee-light);
    }

    /* ABOUT SECTION */
    .about-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding: 100px 0;
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
    }

    .about-container {
        display: flex;
        align-items: center;
        gap: 60px;
    }

    /* LEFT CONTENT */
    .about-content {
        flex: 1.2;
    }

    .section-title {
        color: var(--accent);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 0.9rem;
        margin-bottom: 10px;
        display: block;
    }

    .main-heading {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        line-height: 1.2;
        font-weight: 700;
        margin-bottom: 25px;
        color: var(--coffee-dark);
    }

    .about-content p {
        color: #666;
        line-height: 1.8;
        margin-bottom: 20px;
        font-size: 1.05rem;
    }

    /* HOURS TABLE STYLING */
    .hours-card {
        background: white;
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin: 30px 0;
        border-left: 5px solid var(--coffee-medium);
    }

    .hours-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px dashed #eee;
    }

    .hours-row:last-child {
        border-bottom: none;
    }

    .hours-row .day {
        font-weight: 600;
        color: var(--coffee-dark);
    }

    .hours-row .time {
        color: var(--coffee-medium);
        font-weight: 500;
    }

    .note {
        font-size: 0.85rem;
        font-style: italic;
        color: #888;
    }

    /* BUTTON */
    .btn-custom {
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: 600;
        background-color: var(--coffee-medium);
        color: white;
        border: none;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(111, 78, 55, 0.3);
    }

    .btn-custom:hover {
        background-color: var(--coffee-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(111, 78, 55, 0.4);
    }

    /* RIGHT IMAGE */
    .about-image-card {
        flex: 1;
        position: relative;
    }

    .image-wrapper {
        position: relative;
        z-index: 1;
    }

    .about-image {
        width: 100%;
        height: 500px;
        border-radius: 30px;
        background-size: cover;
        background-position: center;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        transition: transform 0.5s ease;
    }

    /* Dekorasi Lingkaran di Belakang Gambar */
    .image-wrapper::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: var(--accent);
        top: 30px;
        right: -30px;
        border-radius: 30px;
        z-index: -1;
        opacity: 0.3;
    }

    .about-image:hover {
        transform: scale(1.02);
    }

    /* RESPONSIVE */
    @media (max-width: 992px) {
        .about-container {
            flex-direction: column;
            text-align: center;
            gap: 40px;
        }

        .main-heading {
            font-size: 2.5rem;
        }

        .hours-card {
            text-align: left;
        }
    }
</style>

<main class="about-section">
    <div class="container about-container">

        <div class="about-content">
            <span class="section-title">Established 2024</span>
            <h1 class="main-heading">Perjalanan Rasa<br>Sunday Street Coffee</h1>

            <p>
                Didirikan dengan semangat menghadirkan pengalaman kopi otentik,
                Sunday Street Coffee lebih dari sekadar kedai kopi. Kami adalah
                rumah bagi para pecinta kopi yang menghargai kualitas, kenyamanan,
                dan suasana santai di tengah hiruk pikuk kota.
            </p>

            <div class="hours-card">
                <h5 class="fw-bold mb-3" style="color: var(--coffee-dark);"><i class="far fa-clock me-2"></i>Jam Operasional</h5>
                <div class="hours-row">
                    <span class="day">Senin - Kamis</span>
                    <span class="time">19.00 - 00:00</span>
                </div>
                <div class="hours-row">
                    <span class="day">Jumat - Sabtu</span>
                    <span class="time">19.00 - 01:00</span>
                </div>
                <div class="hours-row">
                    <span class="day">Minggu</span>
                    <span class="time">19.00 - 00:00</span>
                </div>
                <div class="mt-3">
                    <p class="note mb-0">
                        * Jam operasional dapat berubah pada hari libur nasional.
                    </p>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-3 justify-content-lg-start justify-content-center">
                <a href="menu.php" class="btn-custom">Lihat Menu</a>
                <a href="contact.php" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold" style="padding: 14px 40px !important;">Hubungi Kami</a>
            </div>
        </div>
        <div class="about-image-card">
            <div class="image-wrapper" style="overflow: hidden; border-radius: 30px;">
                <div id="slide-container" style="display: flex; transition: transform 0.8s cubic-bezier(0.45, 0.05, 0.55, 0.95); width: 400%;">
                    <div class="about-image" style="background-image: url('img/dimsum.jpg'); flex: 0 0 25%;"></div>
                    <div class="about-image" style="background-image: url('img/kopsu.jpg'); flex: 0 0 25%;"></div>
                    <div class="about-image" style="background-image: url('img/kentang goreng.jpg'); flex: 0 0 25%;"></div>
                    <div class="about-image" style="background-image: url('img/694c56ba720f2.jpg'); flex: 0 0 25%;"></div>
                </div>
            </div>
        </div>

        <style>
            /* Mengatur ukuran gambar agar konsisten */
            .about-image {
                width: 100%;
                height: 500px;
                
                background-size: cover;
                background-position: center;
            }

            .image-wrapper {
                position: relative;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            }
        </style>

        <script>
            let currentSlide = 0;
            const totalSlides = 4; 
            const slideContainer = document.getElementById('slide-container');

            function startSlide() {
                currentSlide++;

                // Jika sudah sampai gambar terakhir, kembali ke awal
                if (currentSlide >= totalSlides) {
                    currentSlide = 0;
                }

                // Untuk menggeser container berdasarkan persentase (1 gambar = 25% jika total 4 gambar)
                const offset = currentSlide * -25;
                slideContainer.style.transform = `translateX(${offset}%)`;
            }

            // Jalankan setiap 2 detik
            setInterval(startSlide, 2000);
        </script>
        <!-- <div class="about-image-card">
            <div class="image-wrapper">
                <div id="slideshow" class="about-image" style="background-image: url('img/tentang.jpg');">
                </div>
            </div>
        </div>

        <style>
            /* CSS: Pastikan transisi halus saat gambar berubah */
            .about-image {
                width: 100%;
                height: 400px;
                /* Sesuaikan tinggi */
                background-size: cover;
                background-position: center;
                transition: background-image 0.8s ease-in-out;
                /* Efek transisi halus */
                border-radius: 15px;
            }
        </style>

        <script>
            // Daftar gambar yang akan ditampilkan (sesuaikan dengan nama file di folder img Anda)
            const images = [
                'img/dimsum.jpg',
                'img/kopsu.jpg',
                'img/kentang goreng.jpg',
                'img/694c56ba720f2.jpg'
            ];

            let currentIndex = 0;
            const slideshowElement = document.getElementById('slideshow');

            function changeImage() {
                // Pindah ke index gambar berikutnya
                currentIndex = (currentIndex + 1) % images.length;

                // Ganti background image
                slideshowElement.style.backgroundImage = `url('${images[currentIndex]}')`;
            }

            // Jalankan fungsi changeImage setiap 2000 milidetik (2 detik)
            setInterval(changeImage, 2000);
        </script> -->

    </div>
</main>

<?php include 'footer.php'; ?>