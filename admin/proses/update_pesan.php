<?php 
include ('../connect.php');

if(isset($_POST['simpan'])) {
    //mengambil data dari form
    $pesan = $_POST['pesan'];
    $id = $_POST['id'];

    $query = "UPDATE pesan SET pesan='$pesan' WHERE id_pesan='$id'";
    $result = mysqli_query($db, $query);
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($db).
       " - ".mysqli_error($db));
    } else {
    //tampil alert dan akan redirect ke halaman index.php
    echo "<script>
            alert('Data Berhasil Terkirim.');
            // setTimeout(() => {
                //     window.location.href = '../../index.php';
                //   }, 2000);
            window.location.href = '../admin?url=custom';
            </script>";

            }

  }
?>