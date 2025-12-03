<?php 
// koneksi database

include '../connect.php';

// Query untuk menghapus data
$sql = "DELETE FROM pesan";

// Jalankan query jika konfirmasi diisi OK
if (isset($_GET['hapusAll']) && $_GET['hapusAll'] == 'OK') {
    if (mysqli_query($db, $sql)) {
        header("Location:../admin?url=pesan");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($db);
    }
}
 
?>