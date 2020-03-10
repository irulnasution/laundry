<?php
    // memulai session
    session_start();

    // untuk menghapus semua session yang ada
    session_destroy();

    header("location:../index.php?pesan=logout");
?>