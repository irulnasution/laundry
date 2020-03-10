<?php include "header.php" ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Menambah Data Pelanggan</h4>
            <div class="panel-body">
                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="hp">No. HP</label>
                        <input type="text" name="hp" class="form-control" placeholder="Masukkan No. HP">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>