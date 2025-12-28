<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dan bersihkan dari karakter berbahaya
    $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email  = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subjek = mysqli_real_escape_string($koneksi, $_POST['subjek']);
    $pesan  = mysqli_real_escape_string($koneksi, $_POST['pesan']);

    // Query sesuai dengan struktur tabel kontak
    $query = "INSERT INTO kontak (nama_kotak, gmail_kotak, subjek_kotak, pesan) 
              VALUES ('$nama', '$email', '$subjek', '$pesan')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, balik ke halaman kontak dengan status sukses
        header("Location: contact.php?status=success");
    } else {
        // Jika gagal
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: contact.php");
}
?>