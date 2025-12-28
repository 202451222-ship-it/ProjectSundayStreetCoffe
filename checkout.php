<?php
include 'koneksi.php';
include 'header.php';

// 1. Pastikan session aktif
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$cart = $_SESSION['cart'] ?? [];

// 2. Generate ID Pesanan Otomatis (Contoh: SSC-12345)
if (!isset($_SESSION['id_pesanan_aktif'])) {
    $_SESSION['id_pesanan_aktif'] = "SSC-" . strtoupper(substr(md5(time()), 0, 5));
}
$id_pesanan = $_SESSION['id_pesanan_aktif'];
?>

<div class="container mt-5" style="max-width: 500px; padding-bottom: 50px;">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="bg-success p-3 text-white text-center">
            <h5 class="fw-bold mb-0">KONFIRMASI PESANAN</h5>
            <small>Order ID: <span class="text-warning">#<?php echo $id_pesanan; ?></span></small>
        </div>
        
        <div class="card-body p-4">
            <?php if (empty($cart)): ?>
                <div class="text-center py-4">
                    <p>Keranjang kosong cuy!</p>
                    <a href="menu.php" class="btn btn-outline-success">Kembali ke Menu</a>
                </div>
            <?php else: ?>
                <?php $total_akhir = 0; foreach ($cart as $id => $item): 
                    $subtotal = $item['harga'] * $item['qty'];
                    $total_akhir += $subtotal;
                ?>
                <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                    <div class="d-flex align-items-center">
                        <img src="admin_sunday/img/<?php echo $item['foto']; ?>" width="50" height="50" class="rounded-3 me-3" style="object-fit:cover;">
                        <div>
                            <h6 class="fw-bold mb-0 small"><?php echo strtoupper($item['nama']); ?></h6>
                            <small class="text-muted"><?php echo $item['qty']; ?> porsi</small>
                        </div>
                    </div>
                    <div class="text-end">
                        <div class="fw-bold small">Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></div>
                        <a href="keranjang_aksi.php?hapus=<?php echo $id; ?>" class="text-danger small text-decoration-none">Hapus</a>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="bg-light p-3 rounded-3 text-center my-4">
                    <span class="text-muted small d-block">Total Pembayaran</span>
                    <h3 class="fw-bold text-success mb-0">Rp <?php echo number_format($total_akhir, 0, ',', '.'); ?></h3>
                </div>

                <h6 class="fw-bold mb-3">Pilih Metode Pembayaran</h6>
                <div class="mb-4">
                    <div class="form-check p-3 border rounded-3 mb-2 shadow-sm pointer-event">
                        <input class="form-check-input ms-0 me-2" type="radio" name="method" id="qris" value="qris" checked>
                        <label class="form-check-label fw-semibold w-100" for="qris">
                            📱 QRIS (Sunday Street)
                        </label>
                    </div>
                    <div class="form-check p-3 border rounded-3 shadow-sm">
                        <input class="form-check-input ms-0 me-2" type="radio" name="method" id="cash" value="cash">
                        <label class="form-check-label fw-semibold w-100" for="cash">
                            💵 Bayar di Kasir
                        </label>
                    </div>
                </div>

                <form id="formFinal" action="proses_simpan.php" method="POST">
                    <input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>">
                    <input type="hidden" name="nama_pemesan" id="nama_pembeli">
                    <input type="hidden" name="metode_bayar" id="metode_bayar">
                    <button type="button" onclick="mulaiProses()" class="btn btn-success w-100 fw-bold py-3 rounded-3 shadow">PESAN SEKARANG</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// ID Pesanan dari PHP
const orderID = "<?php echo $id_pesanan; ?>";

function mulaiProses() {
    // 1. Minta Nama Terlebih Dahulu
    Swal.fire({
        title: 'Masukkan Nama Anda',
        input: 'text',
        inputPlaceholder: 'Nama lengkap...',
        showCancelButton: true,
        confirmButtonText: 'Lanjutkan',
        confirmButtonColor: '#008927',
        inputValidator: (value) => { if (!value) return 'Nama tidak boleh kosong!' }
    }).then((result) => {
        if (result.isConfirmed) {
            konfirmasiPembayaran(result.value);
        }
    });
}

function konfirmasiPembayaran(nama) {
    const metode = document.querySelector('input[name="method"]:checked').value;
    
    if (metode === 'qris') {
        Swal.fire({
            title: 'Scan QRIS',
            html: `Halo <b>${nama}</b>, silakan scan QRIS untuk Order <b>#${orderID}</b>:<br><br><img src="img/barcode.png" style="width:230px; border-radius:10px;">`,
            confirmButtonText: 'Saya Sudah Bayar',
            confirmButtonColor: '#008927',
            showCancelButton: true
        }).then((res) => {
            if (res.isConfirmed) jalankanSubmit(nama, metode);
        });
    } else {
        // PERUBAHAN: Sekarang menunjukkan ID Pesanan ke Kasir
        Swal.fire({
            title: 'Bayar di Kasir',
            html: `Silakan tunjukkan ID Pesanan <b class="text-success">#${orderID}</b> ke kasir untuk pembayaran atas nama <b>${nama}</b>.`,
            icon: 'info',
            confirmButtonColor: '#008927',
            confirmButtonText: 'Selesaikan Pesanan'
        }).then((res) => {
            if (res.isConfirmed) jalankanSubmit(nama, metode);
        });
    }
}

function jalankanSubmit(nama, metode) {
    document.getElementById('nama_pembeli').value = nama;
    document.getElementById('metode_bayar').value = metode;
    document.getElementById('formFinal').submit();
}
</script>