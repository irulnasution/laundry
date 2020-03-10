<?php include "header.php" ?>

<div class="container">
    <div class="col-md-5 col-md-offset-3">
        <?php 
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'oke') {
                    echo "<div class='alert alert-success'>Password Berhasil Diganti</div>";
                }
            }
        ?>
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Password</h4>
                <div class="panel-body">
                    <form action="ganti_password_aksi.php" method="post">
                        <div class="form-grooup">
                            <label for="password_baru">Masukkan Password Baru</label>
                            <input type="password" class="form-control" name="password_baru">
                            <input type="submit" class="btn btn-primary" style="margin-top: 10px;" value="Ganti Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>