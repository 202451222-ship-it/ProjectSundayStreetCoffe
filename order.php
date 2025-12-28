<?php
include 'koneksi.php';
session_start();

if (isset($_POST['add_to_cart'])) {
    $nama_menu    = mysqli_real_escape_string($koneksi, $_POST['nama_menu']);
    $harga        = $_POST['harga'];
    $qty          = $_POST['qty'];
    
    // PERBAIKAN 1: Pastikan 'foto' sesuai dengan name="foto" di form menu.php
    // Gunakan null coalescing operator (??) untuk menghindari Undefined Array Key
    $foto         = $_POST['foto'] ?? ''; 
    
    $nama_pembeli = mysqli_real_escape_string($koneksi, $_POST['nama_pemesan'] ?? 'Pelanggan');
    $status_awal  = "Pending"; 
    $total_harga  = $harga * $qty;

    // PERBAIKAN 2: Nama kolom harus 'gambar_pesanan' (sesuai pesanan.sql)
    // PERBAIKAN 3: Pastikan urutan kolom sesuai (nama_pesanan, nama_pemesan, harga_pesanan, jumlah_pesanan, gambar_pesanan, status_pesanan)
    $query_ins = "INSERT INTO pesanan (nama_pesanan, nama_pemesan, harga_pesanan, jumlah_pesanan, gambar_pesanan, status_pesanan) 
                  VALUES ('$nama_menu', '$nama_pembeli', '$total_harga', '$qty', '$foto', '$status_awal')";
    
    if(mysqli_query($koneksi, $query_ins)) {
        $last_id = mysqli_insert_id($koneksi);
        $kode_tampil = "SSC-" . strtoupper(substr(md5(time()), 0, 5));
        echo "<script>window.location='checkout.php?id=$last_id&kode=$kode_tampil';</script>";
        exit();
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}
?>