<?php
include 'koneksi.php';
session_start();

if (isset($_POST['nama_pemesan']) && !empty($_SESSION['cart'])) {
    $nama_pembeli = mysqli_real_escape_string($koneksi, $_POST['nama_pemesan']);
    $kode_unik = "SSC-" . strtoupper(substr(md5(time()), 0, 5));
    
    foreach ($_SESSION['cart'] as $item) {
        $nama_menu = $item['nama'];
        $harga_total = $item['harga'] * $item['qty'];
        $qty = $item['qty'];
        $foto = $item['foto'];
        
        $query = "INSERT INTO pesanan (no_pesanan, nama_pesanan, nama_pemesan, harga_pesanan, jumlah_pesanan, gambar_pesanan, status_pesanan) 
                  VALUES ('$kode_unik', '$nama_menu', '$nama_pembeli', '$harga_total', '$qty', '$foto', 'Pending')";
        mysqli_query($koneksi, $query);
    }

    // Kosongkan keranjang setelah berhasil masuk DB
    unset($_SESSION['cart']);
    echo "<script>alert('Pesanan Berhasil! Kode Anda: $kode_unik'); window.location='menu.php';</script>";
}
?>