<?php include "header.php"; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Harga Per Kilo</h4>
            <div class="panel-body">
                <?php 
                    include "../koneksi.php";
                    $data_harga = mysqli_query($conn, "select harga_per_kilo from harga");
                    while ($data = mysqli_fetch_array($data_harga)) {
                ?>
                    <form action="harga_update.php" method="post">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" value="<?php echo $data['harga_per_kilo']; ?>">
                            <input type="submit" value="Simpan" class="btn btn-primary" style="margin-top: 10px">
                        </div>
                    </form> 
                <?php } ?>
            </div>
        </div>
    </div>
</div>