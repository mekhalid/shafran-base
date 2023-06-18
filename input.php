<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['login'])) {
    $user = $_SESSION['login'];
    $sql = "SELECT * FROM user WHERE nama = '$user'";
    $query = $db->query($sql);
    $hasil = $query->fetch_assoc();
} else {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seminar Shaqu</title>
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
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Seminar Shaqu</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="daftarpeserta.php"><i class="fas fa-user-circle"></i><span>Data Peserta</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="input.php"><i class="fas fa-money-check-alt"></i><span>Input</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-money-check-alt"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- end nav -->
                <div class="container-fluid mt-3">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add User</h1>

                    <!-- Form -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form action="crud.php?act=insert_data" method="post">
                                        <div class="form-group">
                                            <label for="username">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="username" name="nama" placeholder="Input nama lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">No.HP</label>
                                            <input type="text" class="form-control" id="username" name="nohp" value="628" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">IDP</label>
                                            <input type="username" class="form-control" id="username" name="idp" placeholder="Input idp" required>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary">Add User</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright ©yayasan masjid sulthan 2021</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>