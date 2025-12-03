<?php

require_once("../connect.php");

 
// Jika tombol "Register" diklik
if (isset($_POST['register'])) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $secret = '6LfcwkcmAAAAAIop0IsSj0miK6CP1-bxZY-mYAFB';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
        
    $request = file_get_contents($url.'?secret='.$secret.'&response='.$response);
    $result = json_decode($request);

    if($result->success){
        $namaLengkap = mysqli_real_escape_string($db, $_POST['nama_lengkap']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $kon_password = password_hash($_POST['kon_password'], PASSWORD_DEFAULT);


        // Cek apakah username atau email sudah terdaftar
        $query = "SELECT * FROM admin WHERE username=? OR email=?";
        $stmt = mysqli_prepare($db, $query);
        mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            echo "
                <script>
                    alert('Username atau email sudah terdaftar!');
                </script>"
                ;
        } else{
            // Insert ke database
            $query = "INSERT INTO admin (nama_lengkap, username, email, password) VALUES (?, ?, ?, ?)";
            //  if ($stmt = mysqli_prepare($db, $query)) {
            //     echo '<script>alert("Data berhasil disimpan.");</script>';
            //   } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($db);
            //   }
            $stmt = mysqli_prepare($db, $query);
            mysqli_stmt_bind_param($stmt, 'ssss',$namaLengkap, $username, $email, $password);
            mysqli_stmt_execute($stmt);
            header('Location: alert');

        }
        // } else{
        //     echo "
        //     <script>
        //         alert('Password tidak sama!');
        //     </script>"
        //     ;
        // }
    }else{
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
    <title>Register</title>
    <link rel="shortcut icon" href="../../asset/img/logo.png" />
    <link rel="stylesheet" href="../../asset/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container-fluid bg-white loginTwo py-3 ">
    <div class="container py-2">
        <div class="row mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center bg-main mt-5 px-5  content-1 shadow-1 outline-1">
                <form id="reg" action="" method="POST" onsubmit="validate()">
                    <h1 class="text-capitalize my-4 text-light">sign up </h1>
                    <div class="form-group mb-3">
                        <input class="form-control" type="email" name="email" placeholder="email" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="nama lengkap" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="username" placeholder="username" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>
                    <!-- <div class="form-group mb-3">
                        <input class="form-control" type="password" name="kon_password" placeholder="Ulangi Password" required/>
                    </div> -->
                    <!-- <div class="form-group mb-3">
                        <p class="text-danger" id="alert_register"></p>
                    </div> -->
                    <div class="g-recaptcha" data-sitekey="6LfcwkcmAAAAAGafuGZc1qkCLMqiyRMrse9tvvb1"></div>
                    <div class="d-grid gap-2 col-12 my-4 mx-auto">
                        <input type="submit" class="btn btn-green btn-block" name="register" value="Daftar" />
                        <a href="../" class="text-decoration-none text-light">login</a>
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








