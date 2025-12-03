<?php 
    include 'connect.php';
    // Jika belum login, redirect ke halaman login
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>
<style>
    .pesan .img-user{
        width:20%; 
        position:relative; 
        top:-40px; 
        margin:0px auto;
    }
    @media only screen and (max-width: 768px) {
        .pesan li, .pesan p {
            font-size:16px;
        }
        .pesan .btn-light, .pesan .btn-success {
            font-size:12px;
        }
        .pesan .img-user{
            width:30%; 
            position:relative; 
            top:-55px;
        }
    }
</style>
<main class="content">
    <div class="container-fluid pesan">
            <h1 class="h3 my-3"><strong>Daftar</strong> Ucapan</h1>
            <a class="btn btn-danger mt-3 mt-lg-0" href="#" onclick="if(confirm('Anda yakin ingin menghapus SEMUA data?')) { window.location.href='proses/deleteAll?hapusAll=OK' }">Hapus Semua</a>
        <div class="container pb-3">
            
            <div class="row mt-5">

    <?php 
    // PAGINATION
                        $batas = 6;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
        
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $data = mysqli_query($db,"SELECT * FROM pesan");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
        
                        $data_pengguna = mysqli_query($db,"SELECT * FROM pesan ORDER BY id_pesan DESC limit $halaman_awal, $batas");
                        $no = $halaman_awal+1;

                        if (mysqli_num_rows($data) > 0) {
                            while($row = mysqli_fetch_assoc($data_pengguna)){
    ?>
                <div class="col-md-4 mb-5 mt-3">
                    <div class="card p-3 bg-white border-0 content-1 shadow-1">
                        <img src="../asset/img/user.png" alt="icon pesan" style="background-color: #3d5af1;" class="text-center rounded-circle img-user">
                        <ul class="list-unstyled">
                            <li class="text-blue">Nama    : <span class="text-dark"> <?php echo $row['name'] ?> </span></li>
                            <div class="border-bottom mt-2"></div>
                            <!-- <li class="text-blue" >Pesan   : <span class="text-dark"> </span></li> -->
                        </ul>
                        <p class="text-blue m-0">Ucapan :</p>
                        <div class="card-b"  style="max-height:200px; overflow:auto;">
                            <p><?php echo $row['pesan'] ?></p>
                        </div>
                        <a class="text-decoration-none btn btn-danger btn-sm mb-2" href="#" onclick="if(confirm('Anda yakin ingin menghapus data?')) { window.location.href='proses/hapus_pesan.php?id=<?php echo $row['id_pesan'] ?>&hapus=OK' }"><i class="bi bi-trash3 fw-bold"></i></a>
                    </div>
                </div>
            <?php } ?>
            <?php } ?>
            </div>
            <nav>
                    <ul class="d-flex list-unstyled justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php if($halaman > 1){ echo "href='?url=pesan&halaman=$previous'"; } ?>><i class="bi bi-arrow-left-square-fill fs-1"></i></a>
                        </li>
                        <?php 
                        for($x=1;$x<=$total_halaman;$x++){
                            ?> 
                            <li class="page-item  my-auto mx-2"><a class="page-link fs-4" href="?url=pesan&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                            <?php
                        }
                        ?>				
                        <li class="page-item">
                            <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?url=pesan&halaman=$next'"; } ?>><i class="bi bi-arrow-right-square-fill fs-1"></i></a>
                        </li>
                    </ul>
                </nav>
        </div>
    </div>
</main>