<?php
include 'koneksi.php';
session_start();

// Update semua pesanan yang berstatus 'Pending' menjadi 'Selesai'
// agar tidak muncul lagi di halaman checkout/tampilan depan
$query = "UPDATE pesanan SET status_pesanan = 'Selesai' WHERE status_pesanan = 'Pending'";

if (mysqli_query($koneksi, $query)) {
    // Berhasil memperbarui status
    header("Location: menu.php?pesan=sukses");
} else {
    // Gagal memperbarui
    echo "Gagal memproses pembayaran: " . mysqli_error($koneksi);
}
?>