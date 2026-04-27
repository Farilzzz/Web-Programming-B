<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
if (!empty($nama) && !empty($email) && !empty($pesan)) {
    $simpan = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email','$pesan')";
    if (mysqli_query($koneksi, $simpan)) {

        // Mengirim balik data dalam format JSON jika sukses
        echo json_encode([
            'status' => 'sukses',
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan
        ]);
    } else {
        echo json_encode(['status' => 'gagal']);
    }
}
