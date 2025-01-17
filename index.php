<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik Dinus</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
            padding: 10px;
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        .navbar-brand:hover {
            text-decoration: underline;
        }

        .hero-section {
            height: 300px;
            background-image: url('assets/images/gedung2.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-section h1 {
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 1px 1px 0px black, -1px -1px 0px black, 1px -1px 0px black, -1px 1px 0px black; /* Outline effect */
        }

        .hero-section h5 {
            font-weight: bold;
            text-shadow: 0.5px 0.5px 0px black, -0.5px -0.5px 0px black, 0.5px -0.5px 0px black, -0.5px 0.5px 0px black; /* Outline effect */
        }

        .container {
            margin-top: 30px;
            margin-bottom: 30px; /* Optional: Add some space below the container */
        }

        .row {
            margin-top: 30px; /* Add margin to push the cards down */
        }

        .card {
            border: 2px solid black; /* Add black outline */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
        }

        .card-body {
            text-align: center;
        }

        .card-body i {
            font-size: 34px;
            margin-bottom: 15px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">Poliklinik</a>
    </nav>

    <div class="hero-section">
        <h1>Poliklinik Dinus</h1>
        <h5>Layanan Kesehatan</h5>
    </div>

    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-hospital-user text-primary"></i>
                        <h3>Pasien</h3>
                        <p>Untuk mendapatkan layanan kesehatan dari Udinus Poliklinik, silahkan login terlebih dahulu</p>
                        <a href="loginUser.php" class="btn btn-primary">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-stethoscope text-success"></i>
                        <h3>Dokter</h3>
                        <p>Untuk memulai melayanipasien di Udinus Poliklinik, silahkan login terlebih dahulu</p>
                        <a href="login.php" class="btn btn-success">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>