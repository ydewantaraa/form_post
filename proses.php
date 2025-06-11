<?php
// Cek apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil data dari form
    $nama = htmlspecialchars(trim($_POST['nama']));
    $harga = htmlspecialchars(trim($_POST['harga']));
    $deskripsi = htmlspecialchars(trim($_POST['deskripsi']));

    // Validasi sederhana
    if (empty($nama) || empty($harga)) {
        echo "data nama dan harga harus diisi!";
        exit;
    }

    // Tampilkan data yang diterima
    echo "<h2>Produk berhasil diproses!</h2>";
    echo "Nama: $nama";
    echo "<br>Harga: $harga";
    echo "<br>Deskripsi: $deskripsi";
} else {
    echo "Tidak ada data yang masuk!";
}
?>
