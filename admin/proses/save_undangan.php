<?php 
    include '../connect.php';
    
    // save data
    $nama = $_POST['nama'];
    $wa = $_POST['wa'];
    $result_wa = "+62".$wa;

    $data_pengguna = "INSERT INTO kontak (name, wa) VALUES ('$nama', '$result_wa')";
    // Jalankan query
    $save_penduduk = mysqli_query($db, $data_pengguna);

    if(!$save_penduduk){
        echo "<script>
                alert('Data Tidak berhasil terkirim');
        </script>";
    }else{
        echo "<script>
        alert('Data Berhasil Terkirim.');
        // setTimeout(() => {
            //     window.location.href = '../../index.php';
            //   }, 2000);
        window.location.href = '../admin?url=daftar_pengguna';
        </script>";
    }
?>