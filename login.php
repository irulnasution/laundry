<?php
    // agar fungsi session bisa digunakan
    session_start();

    include 'koneksi.php';

    $username = $_POST['username']; // mengambil username dari name index.php
    $password = $_POST['password']; // tambahan md5 karena password di enkripsi

    $data_admin = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
    $cek = mysqli_num_rows($data_admin); // untuk melihat jumlah baris dari perintah yang sesuai dgn query pada table

    if ($cek > 0) {
        $_SESSION['username'] = $username; // menyimpan data sementara
        $_SESSION['status'] = "login";
        header("location:admin/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
?>
