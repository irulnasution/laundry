<?php
include "../koneksi.php";
$pelanggan = $_POST['pelanggan'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];

$tgl_hari_ini = date('Y-m-d');
$status = 0;

$h = mysqli_query($conn, "select harga_per_kilo from harga");
$harga_per_kilo = mysqli_fetch_assoc($h);

$harga = $berat * $harga_per_kilo['harga_per_kilo'];

mysqli_query($conn, "insert into transaksi set transaksi_tgl = '$tgl_hari_ini', transaksi_pelanggan = '$pelanggan', 
transaksi_harga = '$harga', transaksi_berat = '$berat', transaksi_tgl_selesai = '$tgl_selesai',
transaksi_status = '$status'");

 $id_terakhir = mysqli_insert_id($conn);
 $jenis_pakaian = $_POST['jenis_pakaian'];
 $jumlah_pakaian = $_POST['jumlah_pakaian'];

 for ($i=0; $i < count($jenis_pakaian) ; $i++) { 
     if ($jenis_pakaian[$i] != "") {
         mysqli_query($conn, "insert into pakaian set pakaian_transaksi = '$id_terakhir',
         pakaian_jenis = '$jenis_pakaian', pakaian_jumlah = '$jumlah_pakaian'");
     }
 }
header("location:transaksi.php");
?> 