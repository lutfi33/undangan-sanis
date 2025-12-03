<?php

// Jika belum login, redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<main class="content">
<div class="row py-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-main text-white content-1 p-3 shadow-1">
            <h4 class="text-uppercase fw-bold ls-1 text-center text-white my-5">input nama undangan</h4>
            <form action="proses/save_undangan.php" method="POST">
                <div class="row text-start">
        
                    <div class="col-3 mb-3">
                        <label for="nama-undangan" class="col-form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-9 mb-3">
                        <input type="text" class="form-control" id="nama-undangan" name="nama" required>
                    </div>
                
                    <div class="col-3 mb-3">
                        <label for="wa" class="col-form-label">Nomor Whatsapp</label>
                    </div>
                    <div class="col-9 mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="text" class="form-control" placeholder="85464xxx" id="wa" name="wa" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <small><b>+62</b> Otomatis dibuatkan oleh system</small>
                    <div class="col-12 my-3 text-center">
                        <input type="submit" class="btn px-3 btn-green" name="simpan" value="Tambah">
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</main>