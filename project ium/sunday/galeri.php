<?php 
include 'header.php'; 

// 1. Ambil data dari tabel galeri
$query = mysqli_query($koneksi, "SELECT * FROM galeri ORDER BY id_galeri DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri - SUNDAY STREET COFFEE</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        
        .hero-gallery {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/gallery-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            height: 300px;
            background-color: #eee; /* Warna cadangan jika gambar loading */
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .overlay-icon {
            color: white;
            font-size: 2rem;
        }
    </style>
</head>
<body>

<div class="hero-gallery text-center mb-5">
    <div class="container">
        <h1 class="display-4 fw-bold">GALERI KAMI</h1>
        <p class="lead">Inspirasi rasa dan suasana dalam setiap jepretan.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        <?php 
        // 2. Untuk Cek apakah ada data di database
        if (mysqli_num_rows($query) > 0) {
            // 3. Untuk Melakukan perulangan untuk setiap baris data
            while ($row = mysqli_fetch_assoc($query)) { 
        ?>
            <div class="col-md-4">
                <div class="gallery-item shadow-sm">
                    <img src="admin_sunday/img/galeri/<?php echo $row['nama_gambar']; ?>" alt="Sunday Street Coffee Gallery">
                    <div class="gallery-overlay">
                    </div>
                </div>
            </div>
        <?php 
            } 
        } else {
            // Tampilan jika galeri masih kosong
            echo "<div class='col-12 text-center'><p class='text-muted'>Belum ada foto di galeri.</p></div>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>