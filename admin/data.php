<?php
// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$username = $_SESSION['username'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$email = $_SESSION['email'];


?>
<main class="content">
    <h3>Daftar Undangan</h3>
    <a href="admin.php?url=catat" class="btn btn-green mt-3 mt-lg-0"><i class="bi bi-envelope-plus">&ensp;</i>Tambah Undangan</a>
    <div class="table-responsive">
                <table class="table my-3">
                    <thead>
                        <tr class="table-primary text-center">
                            <th>No</th>
                            <th>Nama Undangan</th>
                            <th>Whatsapp</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                       

                       include 'connect.php';
                        $no = 1;
                        // ambil data
                        $sql = "SELECT * FROM kontak";
                        // jalankan query
                        $data = mysqli_query($db,$sql);
                        // Periksa apakah query sukses dijalankan
                        if (!$data) {
                            die("Query gagal: " . mysqli_error($db));
                        }


                        // PAGINATION
                        $batas = 10;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
        
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $data = mysqli_query($db,"SELECT * FROM kontak");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
        
                        $data_pengguna = mysqli_query($db,"SELECT * FROM kontak ORDER BY id_undangan DESC limit $halaman_awal, $batas");
                        $no = $halaman_awal+1;

                        if (mysqli_num_rows($data) > 0) {
                            while($d = mysqli_fetch_assoc($data_pengguna)){

                    ?>
                    
                        <tr class="bg-white">
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $d["name"];?></td>
                            <td class="text-uppercase"><?php echo $d["wa"];?></td>
                            <td>
                                <ul class="list-unstyled justify-content-center d-flex">
                                    <li class="me-2"><a class="btn btn-sm btn-info" class="text-decoration-none" target="_blank" href="../send?no=<?php echo $d['id_undangan'];?>"><i class="bi bi-eye fw-bold"></i></a></li>
                                    <li class="me-2"><a class="btn btn-sm btn-danger" class="text-decoration-none" href="#" onclick="if(confirm('Anda yakin ingin menghapus data?')) { window.location.href='proses/hapus_data_pengguna?id=<?php echo $d['id_undangan'] ?>&hapus=OK' }"><i class="bi bi-trash3 fw-bold"></i></a></li>
                                    <li><a class="btn btn-sm btn-success" class="text-decoration-none" target="_blank" href="https://wa.me/<?php echo $d['wa']?>?text=Assalamu'alaikum%20Warrahmatullahi%20Wabarakatuh%20Maha%20Suci%20Allah%20yang%20telah%20menjadikan%20sesuatu%20lebih%20indah%20dan%20sempurna%20Tanpa%20mengurangi%20rasa%20hormat%2C%20Izinkan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2F(i)%20untuk%20menghadiri%20acara%20pernikahan%20kami%20Amanda%20%26%20Wahyu%20Link%20undangan%20%3A%0A%0Ahttps%3A%2F%2Fseptanisa.instudio.id%2Fsend%3Fno%3D<?php echo $d['id_undangan']?>%20%0A%0AMerupakan%20suatu%20kebanggaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir%20%26%20memberikan%20doa%20restu.%20Mohon%20maaf%20perihal%20undangan%20hanya%20dibagikan%20melalui%20pesan%20ini%20Terimakasih%20banyak%20atas%20perhatiannya%20Wassalamu'alaikum%20Warrahmatullahi%20Wabarakatuh%20Kami%20yang%20berbahagia%20Amanda%20%26%20Wahyu%0A%20%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%20%0A%0ADikirim%20dari%20instudio.id"><i class="bi bi-send fw-bold">&ensp;</i>Undang</a></li>
                                </ul>
                                
                                
                            </td>
                        </tr>
                    
                    <?php } ?>
                    <?php }?>
                    </tbody>
                </table>
                
    </div>
    <nav>
        <ul class="d-flex list-unstyled justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if($halaman > 1){ echo "href='?url=daftar_pengguna&halaman=$previous'"; } ?>><i class="bi bi-arrow-left-square-fill fs-1"></i></a>
            </li>
                        <?php 
                        for($x=1;$x<=$total_halaman;$x++){
                            ?> 
                            <li class="page-item my-auto mx-2"><a class="page-link fs-4" href="?url=daftar_pengguna&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                            <?php
                        }
                        ?>				
            <li class="page-item">
                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?url=daftar_pengguna&halaman=$next'"; } ?>><i class="bi bi-arrow-right-square-fill fs-1"></i></a>
            </li>
        </ul>
    </nav>

</main>