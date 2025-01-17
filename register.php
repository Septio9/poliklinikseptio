<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('assets/images/gambar3.jpg'); /* Path to your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
        }

        .login-container {
            display: flex;
            max-width: 1600px; /* Increased max-width */
            width: 40%; /* Ensure it takes full width */
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background */
            color: #000000;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .right-container {
            flex: 1;
            padding: 60px; /* Increased padding for more space */
        }

        .login-form {
            max-width: 500px; /* Increased max-width for the form */
            margin: 0 auto;
        }

        .login-form h4 {
            text-align: center;
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #588163;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #588163;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Registrasi Disini</h4>
                <p class="login-box-msg text-center">Data Diri <span class="text-primary">Pasien</span></p>
                <form action="pages/register/checkRegister.php" method="post">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" required>

                    <label for="no_ktp">Nomor KTP :</label>
                    <input type="number" class="form-control" name="no_ktp" required>

                    <label for="alamat">Alamat :</label>
                    <input class="form-control" id="alamat" name="alamat" required>

                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" name="no_hp" required>

                    <button type="submit" class="btn btn-block btn-primary">
                        Buat Akun
                    </button>
                </form>
            </div>
            <div class="text-center mt-3">
                <p>Sudah punya akun?</p>
                <a href="loginUser.php" class="">
                    Login
                </a>
            </div>
        </div>
    </div>
</body>

</html>