<?php
session_start();
include 'koneksi.php';

// --- LOGIKA TAMBAH KE KERANJANG ---
if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id_menu'];
    $item = [
        'id'    => $id,
        'nama'  => $_POST['nama_menu'],
        'harga' => $_POST['harga'],
        'qty'   => $_POST['qty'],
        'foto'  => $_POST['foto']
    ];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['qty'] += $_POST['qty'];
    } else {
        $_SESSION['cart'][$id] = $item;
    }

    header("Location: menu.php");
    exit();
}

// --- LOGIKA HAPUS ITEM (INI YANG SERING TERLUPA) ---
if (isset($_GET['hapus'])) {
    $id_hapus = $_GET['hapus'];
    
    // Cek apakah item tersebut ada di dalam session cart
    if (isset($_SESSION['cart'][$id_hapus])) {
        unset($_SESSION['cart'][$id_hapus]);
    }
    
    // Setelah dihapus, kembalikan ke halaman checkout
    header("Location: checkout.php");
    exit();
}
?>