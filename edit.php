<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- 
        navigasi
        -->
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="index.php">Amalan</a>
            </div>
        </nav>
    </div>
    <!-- end nav -->
    <?php
    include 'koneksi.php';
    $no = 1;
    $id = $_GET['id'];
    $data = mysqli_query($db, "select * from bogor where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>

        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col">
                        <div class="p-5">
                            <h3>Edit data</h3>
                            <form action="crud.php?act=update_data" method="post" class="user">
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                                            <input class="form-control form-control-user" type="text" name="nama" value="<?php echo $d['nama'] ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td><input class="form-control form-control-user" type="text" name="nohp" value="<?php echo $d['nohp'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>IDP</td>
                                        <td><input class="form-control form-control-user" type="text" name="idp" value="<?php echo $d['idp'] ?>"></td>
                                    </tr>
                                    <td><input class="btn btn-primary d-block btn-user w-100" type="submit" value="Simpan"></td>
                                    </tr>
                                </table>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright ©yayasan masjid sulthan 2021</span></div>
            </div>
        </footer>
        </div>
        <!-- disini tempat untuk up 
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
        -->
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/script.min.js"></script>
</body>

</html>