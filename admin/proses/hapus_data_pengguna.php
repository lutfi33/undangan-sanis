<?php 
// koneksi database

include '../connect.php';
$id = $_GET['id'];

// Query untuk menghapus data
$sql = "DELETE FROM kontak WHERE id_undangan='$id'";

// Jalankan query jika konfirmasi diisi OK
if (isset($_GET['hapus']) && $_GET['hapus'] == 'OK') {
    if (mysqli_query($db, $sql)) {
        header("Location:../admin?url=daftar_pengguna");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($db);
    }
}
 
?>