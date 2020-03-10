<?php include 'header.php' ?>
    <style>
        .opsi {
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h4>Data Pelanggan</h4>
                <?php
                    if (isset($_GET['pesan'])) {
                        if($_GET['pesan'] == 'berhasil') {
                            echo "<div class = 'alert alert-info'>Data Berhasil Ditambah</div>";
                        }
                    }
                ?>
                <div class="panel-body">
                    <a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-left" style="margin-bottom: 10px">Tambah</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th width="12%" class="opsi">OPSI</th>
                        </tr>

                        <?php
                            include "../koneksi.php";
                            $data_pelanggan = mysqli_query($conn, "select * from pelanggan"); // mengambil data dari pelanggan

                            $no = 1;

                            while ($data = mysqli_fetch_array($data_pelanggan)){  // mengubah data dari table ke dalam bentuk array
                        ?>   <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['pelanggan_nama'] ?></td>
                                <td><?php echo $data['pelanggan_hp'] ?></td>
                                <td><?php echo $data['pelanggan_alamat'] ?></td>
                                <td>
                                    <a href="pelanggan_edit.php?id=<?php echo $data['pelanggan_id'] ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="pelanggan_hapus.php?id=<?php echo $data['pelanggan_id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                </td>                                
                            </tr>      
                        <?php } ?>                        
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php" ?>