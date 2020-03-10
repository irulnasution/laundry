<?php

include "../koneksi.php";

$id = $_GET['id'];
mysqli_query($conn, "delete from pelanggan where pelanggan_id='$id'");
header("location:pelanggan.php");

?>