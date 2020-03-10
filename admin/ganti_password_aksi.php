<?php 
    include "../koneksi.php"; 
    session_start();
    
    $password_baru = $_POST['password_baru']; // mengamnil nilai dari name password_baru
    mysqli_query($conn, "update admin set password='$password_baru' where username=".$_SESSION['username']."");

    header("location:ganti_password.php?pesan=oke");
    
?>

