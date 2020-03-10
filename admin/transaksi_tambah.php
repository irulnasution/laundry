<?php
include "header.php";
include "../koneksi.php";
?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Laundry Baru</h4>
            <div class="panel-body">
                <div class="col-md-8 col-md-offset-2">
                    <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a><br><br>
                    <form action="transaksi_aksi.php" method="post">
                        <div class="form-group">
                            <label for="pelanggan">Pelanggan</label>
                            <select name="pelanggan" required="required" class="form-control">
                                <option value="">- Pilih Pelanggan</option>
                                <?php
                                $data_pelanggan = mysqli_query($conn, "select * from pelanggan");
                                while ($data = mysqli_fetch_array($data_pelanggan)) {
                                ?>
                                    <option value="<?php echo $data['pelanggan_id'] ?>">
                                        <?php echo $data['pelanggan_nama'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="form-group">
                                <label for="berat">Berat</label>
                                <input type="number" name="berat" class="form-control" required="required" placeholder="Masukkan Berat Cucian (Kg)">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tgl. Selesai</label>
                                <input type="date" name="tgl_selesai" class="form-control" required="required">
                            </div><br>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Jenis Pakaian</th>
                                    <th>Jumlah Pakaian</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="jenis_pakaian[]" class="form-control"></td>
                                    <td><input type="number" name="jumlah_pakaian[]" class="form-control"></td>
                                </tr>
                            </table>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>