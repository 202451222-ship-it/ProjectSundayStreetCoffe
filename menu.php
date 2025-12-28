<?php 
include 'header.php'; 

// Mengambil kategori dari URL, jika tidak ada maka default 'all'
$kategori = $_GET['kategori'] ?? 'all';

/**
 * PERBAIKAN LOGIKA:
 * Berdasarkan file street_coffee_db.sql, status menu adalah 'Tersedia' atau 'Habis'.
 * Kode sebelumnya menggunakan 'publish' yang tidak ada di database, sehingga menu tidak tampil.
 */
if ($kategori == 'all') {
    // Menampilkan semua menu yang statusnya 'Tersedia'
    $query = mysqli_query($koneksi, "SELECT * FROM menu WHERE status='Tersedia'");
} else {
    // Menampilkan menu berdasarkan kategori yang dipilih dan statusnya 'Tersedia'
    $query = mysqli_query($koneksi, "SELECT * FROM menu WHERE status='Tersedia' AND kategori='$kategori'");
}

// Menghitung jumlah item di keranjang (jika fitur keranjang sudah ada)
$total_item = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Sunday Street Coffee</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fcfaf8;
            color: #333;
        }

        .section-header {
            padding: 60px 0 40px;
        }

        /* Filter Kategori */
        .category-filter .btn {
            border-width: 2px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin-bottom: 10px;
        }

        /* Card Menu */
        .menu-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 20px;
            overflow: hidden;
            background: #fff;
            border: none;
        }

        .menu-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
        }

        .img-container {
            overflow: hidden;
            height: 220px;
            position: relative;
        }

        .menu-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-card:hover img {
            transform: scale(1.1);
        }

        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 2;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 700;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .price-tag {
            font-size: 1.25rem;
            color: #198754;
            font-weight: 700;
        }

        .qty-input {
            border-radius: 10px;
            border: 1px solid #dee2e6;
            font-weight: 600;
            text-align: center;
        }

        .btn-add {
            border-radius: 12px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background-color: #ffc107;
            border: none;
            transition: 0.3s;
        }

        .btn-add:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>

<div class="container pb-5">
    <div class="section-header text-center">
        <h6 class="text-warning fw-bold text-uppercase mb-2" style="letter-spacing: 3px;">Pilihan Terbaik</h6>
        <h1 class="display-5 fw-bold mb-4">MENU KAMI</h1>
        <div class="mx-auto" style="width: 60px; height: 4px; background: #ffc107; border-radius: 2px;"></div>
    </div>

    <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap category-filter">
        <?php
        $categories = [
            'all' => 'Semua', 
            'Coffee' => 'Coffee', 
            'Non-Coffee' => 'Non-Coffee', 
            'Makanan' => 'Makanan', 
            'Snack' => 'Snack'
        ];
        foreach ($categories as $key => $label) {
            $activeClass = ($kategori == $key) ? 'btn-warning text-white shadow' : 'btn-outline-warning text-dark bg-white';
            $url = ($key == 'all') ? 'menu.php' : "?kategori=$key";
            echo "<a href='$url' class='btn $activeClass fw-bold px-4 rounded-pill'>$label</a>";
        }
        ?>
    </div>

    <div class="row g-4">
        <?php 
        // Perulangan untuk menampilkan data dari database
        while ($data = mysqli_fetch_assoc($query)) { 
        ?>
            <div class="col-sm-6 col-lg-4">
                <div class="card menu-card shadow-sm h-100">
                    <div class="img-container">
                        <span class="category-badge text-uppercase"><?php echo $data['kategori']; ?></span>
                        <img src="admin_sunday/img/<?php echo $data['foto']; ?>" alt="<?php echo $data['nama_menu']; ?>">
                    </div>
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold mb-1 text-dark"><?php echo $data['nama_menu']; ?></h5>
                        <p class="small text-muted mb-3"></p>
                        
                        <div class="d-flex justify-content-between align-items-center mb-4 mt-auto">
                            <span class="price-tag">Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></span>
                        </div>

                        <form action="keranjang_aksi.php" method="POST">
                            <input type="hidden" name="id_menu" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="nama_menu" value="<?php echo $data['nama_menu']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $data['harga']; ?>">
                            <input type="hidden" name="foto" value="<?php echo $data['foto']; ?>">

                            <div class="row g-2">
                                <div class="col-3">
                                    <input type="number" name="qty" class="form-control qty-input h-100 shadow-sm" value="1" min="1">
                                </div>
                                <div class="col-9">
                                    <button type="submit" name="add_to_cart" class="btn btn-add fw-bold w-100 shadow-sm py-2 text-dark">
                                        <i class="fas fa-cart-plus me-1"></i> + Keranjang
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if (mysqli_num_rows($query) == 0): ?>
            <div class="col-12 text-center py-5">
                <p class="text-muted italic">Maaf, menu untuk kategori ini belum tersedia.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>