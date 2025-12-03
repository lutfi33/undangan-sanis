<?php 
    include 'admin/connect.php';
    $id = $_GET['no'];
    $tampilSql = "SELECT * FROM kontak WHERE id_undangan='$id'";
    $hasil = mysqli_query($db, $tampilSql);
    $data = mysqli_fetch_assoc($hasil);
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Septa & Nisa</title>
    <link href="asset/bootstraps/css/bootstrap.min.css" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <!-- fav -->
    <link rel="shortcut icon" href="asset/img/fav_icon.png" type="image/x-icon">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- boostrap -->
    <link rel="stylesheet" href="asset/css/homepage.css" />

</head>

<body>
    <main>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <!-- play -->
                <div class="container bg-transparent fixed-bottom">
                    <div class="row" style="margin-top: -110px;">
                        <div class="col-12 text-end">
                        <audio src="asset/music/bgmusic.mp3" id="music" autoplay></audio>
                    <button onclick="pauseMusic()" class="btn btn-light bg-gold border-0"><i class="bi bi-music-note"></i></button>
                        </div>
                    </div>
                </div>

                <script>
                    var audio = document.getElementById("music");
                    function pauseMusic() {
                        if (audio.paused) {
                            audio.play();
                        } else {
                            audio.pause();
                        }
                    }
                </script>
                <!-- navbar -->
                <div class="container bg-transparent fixed-bottom">
                    <div class="row text-center pt-2 header-main pb-1 rounded mx-2">
                        <div class="col-3">
                            <a href="#mempelai" class="text-decoration-none text-dark">
                                <h6 class="my-0">
                                    <i class="bi bi-arrow-through-heart"></i>
                                </h6>
                                <small>Mempelai</small>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#acara" class="text-decoration-none text-dark">
                                <h6 class="my-0"><i class="bi bi-calendar2-heart"></i></h6>
                                <small>Tanggal</small>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#galeri" class="text-decoration-none text-dark">
                                <h6 class="my-0"><i class="bi bi-balloon-heart"></i></h6>
                                <small>Galeri</small>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#lokasi" class="text-decoration-none text-dark">
                                <h6 class="my-0"><i class="bi bi-house-heart"></i></h6>
                                <small>Lokasi</small>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- HERO -->
                <div class="container-fluid hero text-center">
                    <div class="content-hero text-white">
                        <small>The Wedding Of</small>
                        <h1 class="text-gold">Septa & Nisa</h1>
                        <small>Dear to : </small>
                        <h4 class="my-3 text-capitalize"><?php echo $data['name'];?></h4>
                        <a href="#open" id="btn-open" class="btn btn-light bg-gold border-0"><i class="bi bi-envelope-open-heart">&ensp;</i>Buka Undangan</a>
                    </div>
                </div>

                <!-- Caption -->
                <div id="caption" class="container bg-mood">

                    <div class="row text-center text-white" >
                        <div class="col-12">
                            <p>
                                "Allah menciptakan pasangan hidup untukmu dari jenismu sendiri, supaya kamu mencari ketenangan kepadanya, dan Dia menjadikan di antaramu rasa kasih sayang dan belas kasihan."
                            </p>
                            <p> (Quran, Al-A'raf: 189)</p>
                        </div>
                    </div>
                </div>

                <div class="container text-center img-landing">
                    <section id="open" class="pt-4" data-aos="fade-zoom-in"
                    data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="2000">
                        <h4 class="text-dark">The Wedding Of</h4>
                        <h1 class="text-gold">Septa & Nisa</h1>
                        <p>05 Oktober 2025</p>
                        </section>
                    <div class="img-value">
                     
                        <!-- hitung mundur -->
                        <div class="row bg-gold rounded text-dark"  data-aos="fade-up"
                        data-aos-duration="2000">
                            <div class="col-12 py-4">
                                <h2 class="text-capitalize">hitung mundur acara</h2>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3 id="hari" class="mb-0 mt-2">12</h3>
                                        <small >Hari</small>
                                    </div>
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3  id="jam" class="mb-0 mt-2">0</h3>
                                        <small>Jam</small>
                                    </div>
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3 id="menit" class="mb-0 mt-2">0</h3>
                                        <small >Menit</small>
                                    </div>
                                    <div class="col-2 col-cound rounded">
                                        <h3 id="detik" class="mb-0 mt-2">0</h3>
                                        <small >Detik</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- mempelai -->
                <div id="mempelai" class="container main-bg text-center text-abu pt-5">

                   

                    <section>
                        <img src="asset/img/bismillahWhite.png" class="img-fluid mt-3" width="60%" alt="bismillah" />
                        <p class="mt-3 mb-4 px-3">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh, Dengan memohon rahmat
                            dan ridho Allah SWT. InsyaAllah kami menyelenggarakan acara
                            pernikahan :
                        </p>
                    </section>

                    <div class="row">
                        <div class="col-12" data-aos="fade-zoom-in"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="2000">
                            <img src="asset/img/4.png" class="img-fluid rounded-circle" width="50%" alt="mempelai-1" />
                            <h2 class="text-gold mt-2">Septa Nugroho</h2>

                            <p class=" mx-4">
                                Putra dari Bapak M. Rochim dan Ibu Sri Muryani
                            </p>
                        </div>

                        <div class="col-12" data-aos="fade-zoom-in"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="400" data-aos-duration="2000">
                            <img src="asset/img/5.png" class="img-fluid rounded-circle" width="50%" alt="mempelai-1" />
                            <h2 class="text-gold mt-2">Yuni Nurannisa</h2>

                            <p class="mx-3">
                                Putri dari Bapak Sukamto dan Ibu Sri Pujiasih
                            </p>
                        </div>
                    </div>

                    

                    <!-- informasi -->
                    <div id="acara" class="row mt-5 text-dark">
                        <div class="col-12 px-3">
                            <h1 class="text-gold">Save The Date</h1>
                            <div class="card card-box" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                                <div class="card-body">
                                    <h4 class="card-title">Akad Nikah</h4>
                                    <p class="card-text mt-2 mb-2 text-secondary">
                                        Ahad, 05 Oktober 2025
                                    </p>
                                    <p class="card-text mb-2 text-secondary">
                                        Pukul 06:00 - Selesai
                                    </p>
                                    <p class="card-text">
                                        Dusun wates, Bonjokkidul rt 02 rw 04, Kecamatan Bonorowo, Kabupaten Kebumen
                                    </p>
                                </div>
                            </div>
                            <div class="card card-box  mt-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000">
                                <div class="card-body">
                                    <h4 class="card-title">Resepsi</h4>
                                    <p class="card-text my-2 text-secondary">
                                        Ahad, 5 Oktober 205
                                    </p>
                                    <p class="card-text mb-2 text-secondary">
                                        Pukul 08:00 - Selesai
                                    </p>
                                    <p class="card-text">
                                        Dusun wates, Bonjokkidul rt 02 rw 04, Kecamatan Bonorowo, Kabupaten Kebumen
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- GALERII -->
                    <div id="galeri" class="row" style="margin-top: 130px;">
                        <div class="col-12">
                            <h2 class="text-gold">Galeri</h2>
                            <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5"
                                data-bs-ride="carousel">
                                <div class="carousel-inner rounded" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000">
                                    <div class="carousel-item active">
                                        <img src="asset/img/7.png" class="d-block w-100" alt="foto-1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/9.png" class="d-block w-100" alt="foto-2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/8.png" class="d-block w-100" alt="fotogaleri-2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/6.png" class="d-block w-100" alt="foto-3">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="asset/img/2.png" class="d-block w-100" alt="foto-4">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <!-- maps -->
                    <div id="lokasi" class="row my-5">
                        <div class="col-12">
                            <h2 class="text-gold">Lokasi Kami</h2>
                            <div class="card mt-3 peta-responsive" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3953.3724031883394!2d109.82862047500464!3d-7.750266992268562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDUnMDEuMCJTIDEwOcKwNDknNTIuMyJF!5e0!3m2!1sen!2sid!4v1758554018465!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                        <div class="col-12">
                            <h2 class="text-gold">Amplop Digital</h2>
                            <div class="card mt-4 text-dark">
                                <h3 class="mt-2">Kirim Ke</h3>
                                <img src="asset/img/bca.svg" width="30%" class="img-fluid mt-3 mx-auto" alt="barcode">
                                <p class="fw-bold fs-3 mb-0 mt-2 ">2340544881</p>
                                <small class=" mb-3">AN. Yuni Nurannisa</small>
                            </div>
                        </div>
                    </div>

                    <div id="pesan" class="row mt-5 pb-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                        <div class="col-12">
                            <div class="card text-start bg-gold border-0 text-dark">
                                <h2 class="text-center mt-2">Kirim Ucapan</h2>
                                <form class="px-3" action="admin/proses/save_pesan" method="POST">
                                    <input type="text" hidden name="tamu_undangan" class="form-control" value="<?php echo $id; ?>"  >
                                    <div class="mb-2">
                                        <label for="name" class="form-label">Nama🎈</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Ucapan💌</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-2">
                                        <label for="optionStatus" class="form-label">Keterangan</label>
                                        <select name="optionStatus" class="form-select" id="optionStatus">
                                            <option value="Hadir">Hadir</option>
                                            <option value="Insyaallah">Insyaallah</option>
                                            <option value="Doa Terbaik">Doa Terbaik</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" name="simpan" class="btn btn-success"><i class="bi bi-envelope-paper-heart-fill"></i>&ensp;Kirim</button>
                                    </div>
                                </form>
                                <div class="border-bottom"></div>

                                <div class="komentar">
                                <?php
                                 $tampilSql = "SELECT * FROM pesan ORDER BY id_pesan DESC";
                                 $hasil = mysqli_query($db, $tampilSql);
                                 while($d = mysqli_fetch_assoc($hasil)){
                                
                                ?>
                                    <div class="card m-2 p-2 border-0">
                                        <ul class="d-flex justify-content-between list-unstyled">
                                            <li><h5><i class="bi bi-chat-heart">&ensp;</i><?php echo $d['name'];?></h5></li>
                                            <li><small class="fw-bold "><?php echo $d['hadir'];?></small></li>
                                        </ul>
                                        
                                        <small class="text-secondary"><?php echo $d['pesan'];?></small>
                                    </div>
                                <?php
                                     }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <section id="akhir">
                    <div class="container-fluid text-center text-white close">
                        <section  data-aos="fade-zoom-in"
                        data-aos-easing="ease-in-back"
                        data-aos-duration="1000" 
                        data-aos-offset="0">
                        <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai.</p>
                        <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
                        <p>Turut berbahagia, Segenap keluarga besar</p>
                        </section>
                        
                        <h1 class="text-gold" data-aos="fade-up"
                        data-aos-delay="300"
                        data-aos-duration="2000" >Septa & Nisa</h1>
                        <div class="row">
                            <div class="col-5">
                                <div class="b-bot"></div>
                            </div>
                            <div class="col-2 text-center">
                                <h3>💍</h3>    
                            </div>
                            <div class="col-5">
                                <div class="b-bot"></div>
                            </div>
                        </div>
                    </div>
                </section>                        
                <footer style="background-color: rgb(0,36,56);">
                    <div class="container-fluid text-center" style="padding-bottom: 90px; padding-top: 30px;">
                        <h5 class="text-white">Dibuat Oleh :</h5>
                        <img src="asset/img/logo_instudio_white.svg" class="img-fluid" width="40%" alt="instudio"><br>
                        <a class="btn btn-light bg-gold border-0 btn-sm mt-3" target="_blank" href="https://wa.me/+6287715764870">Pesan Udangan</a>
                    </div>
                </footer>
            </div>
            <div class="col-md-4"></div>
        </div>
    </main>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once:true
      });


       // fullscreen
        document.addEventListener("DOMContentLoaded", function() {
    const openButton = document.getElementById("btn-open");
    const openSection = document.getElementById("open");
    const musicPlayer = document.getElementById("music"); // Menambahkan elemen audio

    if (openButton && openSection) {
        openButton.addEventListener("click", function(event) {
            event.preventDefault();

            // 1. Meminta fullscreen
            const element = document.documentElement;
            if (element.requestFullscreen) {
                element.requestFullscreen();
            } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
            } else if (element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen();
            } else if (element.msRequestFullscreen) {
                element.msRequestFullscreen();
            }

            // 2. Scroll ke elemen dengan id="open" & memutar musik
            setTimeout(() => {
                openSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Periksa apakah pemutar musik ada dan mulai memutar
                if (musicPlayer) {
                    musicPlayer.play().catch(error => {
                        console.log('Autoplay dicegah. Perlu interaksi pengguna.', error);
                    });
                }
            }, 500);
        });
    }
});
    </script>
    <!-- coundown -->
    <script>
        // Tanggal target yang akan dihitung mundurnya
        var targetDate = new Date("October 4, 2025 23:59:59").getTime();
    
        // Memperbarui hitungan mundur setiap 1 detik
        var countdown = setInterval(function() {
          // Mendapatkan waktu sekarang
          var now = new Date().getTime();
    
          // Menghitung selisih waktu antara sekarang dan target
          var distance = targetDate - now;
    
          // Menghitung hari, jam, menit, dan detik
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
          // Menampilkan hasil perhitungan mundur pada elemen dengan id "countdown"
          document.getElementById("hari").innerHTML = days;
          document.getElementById("jam").innerHTML = hours;
          document.getElementById("menit").innerHTML = minutes;
          document.getElementById("detik").innerHTML = seconds;
    
          // Menghentikan hitungan mundur jika sudah mencapai target
          if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("countdown").innerHTML = "Waktu telah berakhir";
          }
        }, 1000);
      </script>
    <script src="asset/bootstraps/js/bootstrap.min.js"></script>
</body>

</html>