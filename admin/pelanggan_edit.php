<?php include "header.php" ?>
<div class="container">
    <div class="col-md-5 col-md-offset-3">

        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Data Pelanggan</h4>
                <div class="panel-body">
                    <?php include "../koneksi.php"; 
                    $id = $_GET['id']; // menangkap id yang dikirim melalui url
                    
                    $data_pelanggan = mysqli_query($conn, "select * from pelanggan where pelanggan_id='$id'");
                    
                    while ($data = mysqli_fetch_array($data_pelanggan)) {
                    ?> 
                        <form action="pelanggan_update.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="hidden" name="id" value="<?php echo $data['pelanggan_id'] ?>">
                                <input type="text" name="nama" class="form-control" value="<?php echo $data['pelanggan_nama'] ?>" placeholder="Masukkan Nama">
                            </div> 
                            <div class="form-group">
                                <label for="hp">No. HP</label>
                                <input type="number" name="hp" class="form-control" value="<?php echo $data['pelanggan_hp'] ?>" placeholder="Masukkan NO. HP">
                            </div> 
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $data['pelanggan_alamat'] ?>" placeholder="Masukkan Alamat">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </form>
                        
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>





