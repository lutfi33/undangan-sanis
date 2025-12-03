<head>
    <link rel="shortcut icon" href="../../asset/img/logo.png" />
    <link rel="stylesheet" href="../../asset/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../asset/css/main.css">
</head>
<div class="container-fluid py-5 mt-5">
    <div class="container py-2">
        <div class="row my-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-blue3 shadow-1 p-4 content-1 text-center ">
            <h3 class="text-capitalize fw-bold text-blue">Pendaftaran administrator <span class="fw-bold text-success">DITERIMA</span></h3>
            <h4 class="text-uppercase fw-bold ls-1 text-blue text-center">silahkan menuju ke halaman login</h4>
            <a href="../index.php" class="btn btn-blue my-3">Login Sekarang</a><br>
            <small class="fw-bold" id="countdown"></small>
            <script>
            var url = "../index.php"; // membuat url tujuan
            var count = 8; // membuat hitungan kedalam detik
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    // $('#msg').html('Anda akan menuju ke ' +'<i>'+ url + ' dalam hitungan: ' + waktu + ' detik.'+'<i>');
                    document.getElementById("countdown").innerHTML= 'Menuju halaman login dalam hitungan '+ waktu;
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
        </script>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<!-- <script>
    setTimeout(() => {
                    window.location.href = '../index.php';
                  }, 3000);
</script> -->