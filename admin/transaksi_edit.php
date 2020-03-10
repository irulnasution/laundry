<?php include "header.php" ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Edit Data Transaksi</h4>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                    <br><br>
                    <!-- mengambil id transaksi -->
                    <?php
                    $id = $_GET['id'];
                    include "../koneksi.php";
                    // mengambil data pada tabel transaksi
                    $transaksi = mysqli_query($conn, "select * from transaksi where transaksi_id='$id'");
                    while ($data_transaksi = mysqli_fetch_array($transaksi)) {
                    ?>
                        <form action="transaksi_update" method="post">
                            <input type="hidden" name="id" value="<?php echo $data_transaksi['transaksi_id'] ?>">
                            <div class="form-group">
                                <label for="pelanggan">Pelanggan</label>
                                <select name="pelanggan" class="form-control" required="required">
                                    <option value="">- Pilih Pelanggan</option>
                                    <!-- mengambil data dari pelanggan -->
                                    <?php
                                    $pelanggan = mysqli_query($conn, "select * from pelanggan");
                                    while ($data_pelanggan = mysqli_fetch_array($pelanggan)) {
                                    ?>
                                        <option <?php
                                                if ($data_pelanggan['pelanggan_id'] == $data_transaksi['transaksi_pelanggan']) {
                                                    // echo
                                                    //     "selected='selected'";
                                                } ?> value="<?php echo $data_pelanggan['pelanggan_id']; ?>"><?php
                                                                        echo $data_pelanggan['pelanggan_nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="berat">Berat</label>
                                <input type="number" placeholder="Masukkan Berat" value="<?php echo $data_transaksi['transaksi_berat'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="berat">Tgl. Selesai</label>
                                <input type="date" value="<?php echo $data_transaksi['transaksi_tgl_selesai'] ?>" class="form-control">
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>