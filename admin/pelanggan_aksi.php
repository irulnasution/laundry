<?php

// menghubungkan dengan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
// input data ke tabel pelanggan
$data_pelanggan = mysqli_query($conn,"insert into pelanggan set pelanggan_nama='$nama', pelanggan_hp='$hp', pelanggan_alamat='$alamat'");
header("location:pelanggan.php?pesan=berhasil");
?>