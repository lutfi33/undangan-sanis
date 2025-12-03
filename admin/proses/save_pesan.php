<?php 
    include '../connect.php';
    if(isset($_POST['simpan'])) {
        // save data
        $tamu_undangan = $_POST['tamu_undangan'];
        $nama_pesan = $_POST['name'];
        $pesan = $_POST['pesan'];
        $option = $_POST['optionStatus'];

        $data_pengguna = "INSERT INTO `pesan` (`id_pesan`, `name`, `pesan`, `hadir`) VALUES (NULL, '$nama_pesan', '$pesan', '$option');";
        // Jalankan query
        $save_pengguna = mysqli_query($db, $data_pengguna);

        if(!$save_pengguna){
            echo "<script>
            alert('Tidak Terkirim.');
            </script>";
        }else{
            header("Location:../../send?no=". urlencode($tamu_undangan)."#pesan");
        }
        
    }
    
?>