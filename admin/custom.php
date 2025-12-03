<?php

// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

    include 'connect.php';

    $tampilSql = "SELECT * FROM pesan ";
    $hasil = mysqli_query($db, $tampilSql);
    $data = mysqli_fetch_assoc($hasil);

?>
<main class="content">
<div class="row py-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-white content-1 p-3 shadow-1">
            <h4 class="text-uppercase fw-bold ls-1 text-center my-5">Kustom pesan undangan</h4>
            <form action="proses/update_pesan.php" method="POST">
                <div class="row text-start">
        
                    <div class="col-2 mb-3">
                        <label for="pesan" class="col-form-label">Pesan</label>
                    </div>
                    <div class="col-10 mb-3">
                        <input type="hidden" name="id" value="<?php echo $data['id_pesan'];?>">
                        <textarea name="pesan" class="form-control" id="pesan" cols="30" rows="10"><?php echo $data['pesan'];?></textarea>
                    </div>
                    <div class="col-12 my-3 text-center">
                        <input type="submit" class="btn px-3 btn-blue" name="simpan" value="Update">
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</main>