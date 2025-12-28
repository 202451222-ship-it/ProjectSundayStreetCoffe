<?php
include 'koneksi.php';
session_start();

if (!empty($_SESSION['cart']) && isset($_POST['nama_pemesan'])) {
    // Ambil kode unik dari form (jika dikirim) atau buat baru
    $kode_unik = isset($_POST['id_pesanan']) ? mysqli_real_escape_string($koneksi, $_POST['id_pesanan']) : "SSC-" . strtoupper(substr(md5(time()), 0, 5));
    
    $nama_pembeli = mysqli_real_escape_string($koneksi, $_POST['nama_pemesan']);

    foreach ($_SESSION['cart'] as $item) {
        $nama_menu = mysqli_real_escape_string($koneksi, $item['nama']);
        $harga_total = $item['harga'] * $item['qty'];
        $qty = $item['qty'];
        $foto = $item['foto'];

        $query = "INSERT INTO pesanan (no_pesanan, nama_pesanan, nama_pemesan, harga_pesanan, jumlah_pesanan, gambar_pesanan, status_pesanan) 
                  VALUES ('$kode_unik', '$nama_menu', '$nama_pembeli', '$harga_total', '$qty', '$foto', 'Pending')";
        mysqli_query($koneksi, $query);
    }

    // 1. Kosongkan keranjang setelah disimpan
    unset($_SESSION['cart']);
    
    // 2. Kosongkan ID Pesanan yang tersimpan di session agar ganti ID baru untuk pesanan berikutnya
    unset($_SESSION['id_pesanan_aktif']);

    // 3. Langsung pindah ke menu.php tanpa popup alert
    header("Location: menu.php?status=success");
    exit();
} else {
    // Jika diakses tanpa data, kembalikan ke menu
    header("Location: menu.php");
    exit();
}