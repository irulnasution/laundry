<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <title>Laundry</title>
</head>
<body background="#f0f0f0">
    <header>
        <h2 style="text-align: center; margin-top: 30px"> Laundry</h2>
    </header>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'gagal') {
                        echo "<div class = 'alert alert-danger'>Login Gagal</div>";
                    } else if ($_GET['pesan'] == 'logout'){
                        echo "<div class = 'alert alert-info'>Anda telah berhasil logout</div>";
                    } else if ($_GET['pesan'] == 'belum_login'){
                        echo "<div class = 'alert alert-danger'>Anda harus login terlebih dahulu</div>";
                }
            }            
            ?>
            <form action="login.php" method="post">
                <div class="panel">
                    <div class="panel-body">
                        <div class="panel-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                                <input style="margin-top: 10px" type="submit" class="btn btn-primary" value="Log in">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>