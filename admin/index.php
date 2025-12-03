<?php 

require_once("connect.php");

// Jika tombol "Login" diklik
if (isset($_POST['login'])) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret = '6LfcwkcmAAAAAIop0IsSj0miK6CP1-bxZY-mYAFB';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
        
    $request = file_get_contents($url.'?secret='.$secret.'&response='.$response);
    $result = json_decode($request);

    if ($result->success) {
        // reCAPTCHA berhasil diverifikasi, lakukan tindakan yang diinginkan
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = $_POST['password'];
        
        // Cek apakah username ada di database
        $query = "SELECT * FROM admin WHERE username=?";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['username'] = $username;
            // Verifikasi password
            if (password_verify($password, $row['password'])) {
                
                $_SESSION['email'] = $row['email'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                header("Location: admin?url=daftar_pengguna");
                exit();
            } else {
                echo "
                <script>
                    alert('Password Salah!');
                </script>"
                ;
            }
        } else {
            echo "
                <script>
                    alert('Username tidak ditemukan!');
                </script>"
                ;
        }
    } else {
        // reCAPTCHA tidak berhasil diverifikasi, tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
        echo "
                <script>
                    alert('RECAPTCHA SALAH!');
                    window.location.href = 'index.php';
                </script>"
                ;
        exit;
    }

    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../asset/img/logo.png" />
    <link rel="stylesheet" href="../asset/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    
<div class="container-fluid bg-white py-3 loginTwo">
    <div class="container py-3">
        <img src="../asset/img/logo_instudio.svg" class="img-fluid logo-ins" alt="logo">
        <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6 py-5 text-center px-5 bg-main outline-1 content-1 shadow-1">
                <h2 class="text-capitalize text-white my-3">Sign In</h2>
                <form class="mt-5" action="" method="POST">
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="username" placeholder="Username" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LfcwkcmAAAAAGafuGZc1qkCLMqiyRMrse9tvvb1"></div>
                    <div class="d-grid gap-2 col-12 my-4 mx-auto">
                    <input type="submit" class="btn btn-green" name="login" value="Masuk" />
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<script src="../asset/bootstraps/js/bootstrap.min.js"></script>
</body>
</html>
