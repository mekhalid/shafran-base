<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Login Pengurus</h4>
                                    </div>
                                    <form action="proseslogin.php" method="post" onSubmit="return validasi()" class="user">
                                        <div class="mb-3">
                                            <p>Username</p>
                                            <input class="form-control form-control-user" type="name" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda" name="username"></div>
                                        <div class="mb-3">
                                            <p>Password</p>
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="masukan Password anda" name="password"></div>
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Login</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>