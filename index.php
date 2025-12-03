<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dika ❤️ Sannis</title>
    <link href="asset/bootstraps/css/bootstrap.min.css" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

    <!-- fav -->
    <link rel="shortcut icon" href="asset/img/logosa.png" type="image/x-icon">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!-- boostrap -->
    <link rel="stylesheet" href="asset/css/homepage.css" />
</head>

<body class="no-scroll">
    <main>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">


                <!-- play -->
                <div class="container bg-transparent fixed-bottom">
                    <div class="row d-flex justify-content-end" style="margin-top: -110px;">
                        <div class="col-12 text-end w-25">
                            <audio src="asset/music/bgsanis.MP3" id="music" autoplay></audio>
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
                    <div class="row text-center pt-3 header-main pb-2 rounded mx-2">
                        <div class="col-3">
                            <a href="#mempelai" class="text-decoration-none text-white">
                                <h6 class="my-0">
                                    <i class="bi bi-arrow-through-heart"></i>
                                </h6>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#acara" class="text-decoration-none text-white">
                                <h6 class="my-0"><i class="bi bi-calendar2-heart"></i></h6>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#galeri" class="text-decoration-none text-white">
                                <h6 class="my-0"><i class="bi bi-balloon-heart"></i></h6>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#ucapan" class="text-decoration-none text-white">
                                <h6 class="my-0"><i class="bi bi-envelope-paper-heart"></i></h6>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- HERO -->
                <div class="container-fluid hero d-flex flex-column justify-content-between text-center">
                    <div class="mt-3">
                        <h4 class="text-white text-decor">#DIKAlatakdirberSHAma</h4>
                        <h4 class="text-white text-decor">#DiSHahkanDIKA</h4>
                    </div>
                    <div class="position-relative">
                        <h3 class="position-absolute top-0 start-0 mt-3 text-white">From Classmate</h3>
                        <h3 class="position-absolute bottom-0 end-0 mb-3 text-white">To Soulmate</h3>
                        <video width="320" height="240" autoplay muted loop playsinline>
                            <source src="asset/img/vidland2.MOV" type="video/mp4">
                        </video>
                    </div>
                    <br>

                    <div class="content-hero text-white">
                        <small>Dear to : </small>
                        <h4 class="my-3">Tamu Undangan</h4>
                        <a href="#open" id="btn-open" class="btn btn-light bg-gold border-0 mx-5"><i class="bi bi-envelope-open-heart">&ensp;</i>Buka Undangan</a>
                        <p class="mt-3">Kamu Diundang!! <br>Dihari bahagiannya Sannis & Dika</p>
                    </div>
                </div>

                <!-- Caption -->
                <div id="caption" class="container bg-mood">

                    <div class="row text-center text-white">
                        <div class="col-12">
                            <!-- <p>
                                "Allah menciptakan pasangan hidup untukmu dari jenismu sendiri, supaya kamu mencari ketenangan kepadanya, dan Dia menjadikan di antaramu rasa kasih sayang dan belas kasihan."
                            </p>
                            <p> (Quran, Al-A'raf: 189)</p> -->
                        </div>
                    </div>
                </div>

                <div id="targetSection" class="container text-center img-landing">

                    <div class="img-value">

                        <!-- hitung mundur -->
                        <div class="row  main-coundown" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="col-2"></div>
                            <div class="col-8 px-0 py-4 bg-marron rounded text-white ">
                                <h2 class="text-capitalize">Coundown Event</h2>
                                <div class="row mt-4 justify-content-center">
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3 id="hari" class="mb-0 mt-2">12</h3>
                                        <small>Hari</small>
                                    </div>
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3 id="jam" class="mb-0 mt-2">0</h3>
                                        <small>Jam</small>
                                    </div>
                                    <div class="col-2 me-2 col-cound rounded">
                                        <h3 id="menit" class="mb-0 mt-2">0</h3>
                                        <small>Menit</small>
                                    </div>
                                    <div class="col-2 col-cound rounded">
                                        <h3 id="detik" class="mb-0 mt-2">0</h3>
                                        <small>Detik</small>
                                    </div>
                                </div>

                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    <section id="open" class="pt-4 " data-aos="fade-zoom-in"
                        data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="2000" style="rotate: -7deg;">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8 text-start">
                                <h5 class="text-dark text-decor">The Wedding Of</h5>
                                <h2>Saniis & Dika</h2>
                                <p>December 14th, 2025</p>
                            </div>
                            <div class="col-2"></div>
                        </div>

                    </section>
                </div>


                <div class="container text-center bermula-section">

                    <div class="img-value-2">
                        <video width="320" height="240" autoplay muted loop playsinline class="video-nikah" style="rotate: 10deg;">
                            <source src="asset/img/bermula.MOV" type="video/mp4" class="rounded">
                        </video>
                    </div>
                    <section id="open" class="pt-4 " data-aos="fade-zoom-in"
                        data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="2000" style="rotate: 10deg;">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10 text-start">
                                <h5 class="text-dark text-decor">Dimana semula bermulai?</h5>
                                <p>Tak disangka, langkah yang berawal dari satu ruang kelas yang sama di sekolah teknik menengah kini bermuara pada ikatan serius. Siapa sangka tatap sederhana yang dulu hanya sekilas, kini berubah menjadi janji seumur hidup.Kita berjalan dari hari-hari biasa, menuju kisah luar biasa yang hanya ditakdirkan kepada dua hati yang saling menemukan.</p>
                            </div>
                        </div>

                    </section>
                </div>

                <div class="container text-center d-flex justify-content-center flex-column surat-section">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <img src="asset/img/akhir.png" class="img-fluid w-50" alt="">
                            <p>Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.</p>
                            <h6>Ar-Rum · Ayat 21
                            </h6>
                        </div>
                        <div class="col-2"></div>
                    </div>


                </div>

                <!-- mempelai -->
                <div id="mempelai" class="container main-bg text-center text-dark">
                    <img src="asset/img/top.png" class="img-fluid w-100" alt="">

                    <h2 class=" text-dark" style="z-index: 10; ">
                        Our Wedding
                    </h2>

                    <video width="300" height="220" autoplay muted loop playsinline class="video-nikah">
                        <source src="asset/img/nikah.MOV" type="video/mp4" class="rounded">
                    </video>


                    <section>
                        <p class="mb-4 px-4">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh, Dengan memohon rahmat
                            dan ridho Allah SWT. InsyaAllah kami menyelenggarakan acara
                            pernikahan :
                        </p>
                    </section>

                    <div class="row">
                        <div class="col-12" data-aos="fade-zoom-in"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="200" data-aos-duration="2000">
                            <img src="asset/img/dikanew.png" class="img-fluid rounded" width="50%" alt="mempelai-1" />
                            <h4 class="text-gold text-decor mt-2">Andika Pangestu Saputra <br> (Dika)</h4>

                            <p class=" mx-4">
                                Putra ke 2 dari Bapak Tuis dan Ibu Jumiyati
                            </p>
                        </div>

                        <div class="col-12" data-aos="fade-zoom-in"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="400" data-aos-duration="2000">
                            <img src="asset/img/sanisnew.png" class="img-fluid rounded-circle" width="50%" alt="mempelai-1" />
                            <h4 class="text-gold text-decor mt-2">Sannis Hening Astuti <br> (Sannis)</h4>

                            <p class="mx-3">
                                Putri kedua dari Bapak Sujatmiko Ibu Sri Tumpiyati (Anak Pertama)
                            </p>
                        </div>
                    </div>

                </div>


                <!-- save the date -->
                <div class="container d-flex flex-column justify-content-center text-center save-date">

                    <!-- informasi -->
                    <div id="acara" class="row text-dark pb-5">
                        <div class="col-12 px-3">
                            <h3 class="text-gold text-decor">Save The Date</h3>
                            <img src="asset/img/logosa.png" class="img-fluid w-25 my-2 rounded-circle" alt="">
                            <div class="card bg-transparent border-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                                <div class="card-body">
                                    <h4 class="card-title">Akad Nikah</h4>
                                    <p class="card-text mt-2 mb-2 text-secondary">
                                        Ahad, 15 Desember 2025
                                    </p>
                                    <p class="card-text mb-2 text-secondary">
                                        Pukul 08:00 - Selesai
                                    </p>
                                    <p class="card-text">
                                        Loano Kulon, rt 03/04, Loano, Purworejo
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-transparent border-0 mt-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000">
                                <div class="card-body">
                                    <h4 class="card-title">Resepsi</h4>
                                    <p class="card-text my-2 text-secondary">
                                        Ahad, 14 Desember 2025
                                    </p>
                                    <p class="card-text mb-2 text-secondary">
                                        Pukul 12:30 - 15:00
                                    </p>
                                    <p class="card-text">
                                        Loano Kulon, rt 03/04, Loano, Purworejo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- wedding gift -->
                <div class="container text-center gift-section">
                    <h2 class=" mt-5 text-dark" style="z-index: 10; rotate: -10deg;">
                        Our Location
                    </h2>
                    <!-- maps -->
                    <div id="lokasi" class="row mb-5 ">
                        <div class="col-12">
                            <div class="card mt-3 peta-responsive" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3083.9678313565782!2d110.0353664!3d-7.675738099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aeba0c40dada9%3A0xc7fb4f9739f13d41!2sSelaras%20Suai!5e1!3m2!1sen!2sid!4v1764772653255!5m2!1sen!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <a href="https://maps.app.goo.gl/U8NfTDARuBpubKbeA" class="btn my-3 btn-dark bg-marron border-0 ">Open</a>
                        </div>
                    </div>

                    <img src="asset/img/flowers.png" class="img-fluid w-25" alt="">

                    <h2 class=" mt-5 text-dark" style="z-index: 10; rotate: -10deg;">
                        Wedding Gift
                    </h2>

                    <div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                        <div class="col-12">
                            <div class="card mt-4  border-0 rounded-0 text-dark">
                                <h3 class="mt-2 text-decor">Kirim Ke</h3>
                                <img src="asset/img/mandiri.webp" width="30%" class="img-fluid mt-3 mx-auto" alt="barcode">
                                <p class="fw-bold fs-3 mb-0 mt-2 ">1560026025991</p>
                                <small class=" mb-3">AN. Sannis Hening Astuti</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Caption -->
                <div id="caption" class="container bg-our">

                    <div class="row text-center text-white">
                        <div class="col-12">
                            <!-- <p>
                                "Allah menciptakan pasangan hidup untukmu dari jenismu sendiri, supaya kamu mencari ketenangan kepadanya, dan Dia menjadikan di antaramu rasa kasih sayang dan belas kasihan."
                            </p>
                            <p> (Quran, Al-A'raf: 189)</p> -->
                        </div>
                    </div>
                </div>

                <!-- galeri -->
                <div id="galeri" class="container text-center position-relative img-galeri">
                    <h2 class="position-absolute top-25 start-50 translate-middle-x mt-3  text-dark" style="z-index: 10; rotate: -10deg;">
                        Our Moments
                    </h2>

                    <div class="row m-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                        <div class="col-12 m-0 p-0">
                            <img src="asset/img/mygaleri-6.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-6 m-0 p-0">
                            <img src="asset/img/mygaleri-5.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-6 m-0 p-0">
                            <img src="asset/img/mygaleri-3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>


                <!-- Caption -->
                <div id="caption" class="container bg-our-bottom">

                    <div class="row text-center text-white">
                        <div class="col-12">
                            <!-- <p>
                                "Allah menciptakan pasangan hidup untukmu dari jenismu sendiri, supaya kamu mencari ketenangan kepadanya, dan Dia menjadikan di antaramu rasa kasih sayang dan belas kasihan."
                            </p>
                            <p> (Quran, Al-A'raf: 189)</p> -->
                        </div>
                    </div>
                </div>



                <!-- comment -->
                <div class="container text-center img-all-comment">

                    <div class="row" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                        <div class="col-12">
                            <h2 class=" my-3  text-dark" style="z-index: 10; rotate: -10deg;">
                                Pesan & Harapan
                            </h2>
                            <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                        <div class="card border-0 text-dark b-message d-flex flex-column justify-content-center mx-auto text-center">
                                            <img src="asset/img/flowers.png" class="img-fluid text-center w-25 mb-3 mx-auto" alt="">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor doloremque architecto fugit recusandae quibusdam animi perferendis consequuntur. In, tenetur necessitatibus.</p>
                                            <h6 class="text-decor">Lutfi</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <div class="card border-0 text-dark b-message d-flex flex-column justify-content-center mx-auto text-center">
                                            <img src="asset/img/flowers.png" class="img-fluid text-center w-25 mb-3 mx-auto" alt="">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloe quibusdam animi perferendis consequuntur. In, tenetur necessitatibus.</p>
                                            <h6 class="text-decor">Mawar</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item  ">
                                        <div class="card border-0 text-dark b-message d-flex flex-column justify-content-center mx-auto text-center">
                                            <img src="asset/img/flowers.png" class="img-fluid text-center w-25 mb-3 mx-auto" alt="">
                                            <p>Lorem ipsum dolor sit amet conseccto fugit recusandae quibusdam animi perferendis consequuntur. In, tenetur necessitatibus.</p>
                                            <h6 class="text-decor">Melati</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-marron" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-marron" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- form -->
                <div id="ucapan" class="container text-center img-comment d-flex flex-column justify-content-center">

                    <div class="row " data-aos="fade-up" data-aos-delay="400" data-aos-duration="2000" data-aos-anchor-placement="top-bottom">
                        <div class="col-1"></div>
                        <div class="col-10">

                            <div class="card text-start bg-transparent  border-0 text-dark">
                                <h3 class="text-center text-decor mt-2">Kirim Ucapan</h3>

                                <form class="px-3" action="">
                                    <div class="mb-2">
                                        <label for="name" class="form-label">Nama🎈</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Ucapan💌</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="optionStatus" class="form-label">Keterangan</label>
                                        <select name="optionStatus" class="form-select" id="optionStatus">
                                            <option value="Hadir">Hadir</option>
                                            <option value="Insyaallah">Insyaallah</option>
                                            <option value="Doa Terbaik">Doa Terbaik</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-light bg-gold"><i class="bi bi-envelope-paper-heart-fill"></i>&ensp;Kirim</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-1"></div>

                    </div>

                </div>

                <section id="akhir">
                    <div class="container-fluid text-center text-white close">
                        <section data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="1000"
                            data-aos-offset="0">
                            <img src="asset/img/logosa.png" class="img-fluid w-25 rounded-circle my-3" alt="">
                            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai.</p>
                            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh</p>
                            <p>Turut berbahagia, Segenap keluarga besar</p>
                        </section>

                        <h1 class="text-decor" data-aos="fade-up"
                            data-aos-delay="300"
                            data-aos-duration="2000">Dika & Sannis</h1>
                        <div class="row">
                            <div class="col-5">
                                <div class="b-bot"></div>
                            </div>
                            <div class="col-2 text-center">
                                <h3> 💛 </h3>
                            </div>
                            <div class="col-5">
                                <div class="b-bot"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <footer style="background-color: rgba(102, 11, 11, 1);">
                    <div class="container-fluid text-center" style="padding-bottom: 90px; padding-top: 30px;">
                        <h5 class="text-white ">Dibuat Oleh :</h5>
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
            once: true
        });

        // fullscreen
        document.addEventListener("DOMContentLoaded", function() {
            const openButton = document.getElementById("btn-open");
            const openSection = document.getElementById("open");
            const musicPlayer = document.getElementById("music");

            // Pastikan scroll terkunci saat awal
            document.body.classList.add("no-scroll");

            if (openButton && openSection) {
                openButton.addEventListener("click", function(event) {
                    event.preventDefault();

                    // 1. Aktifkan scroll kembali setelah tombol diklik
                    document.body.classList.remove("no-scroll");

                    // 2. Fullscreen
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

                    // 3. Scroll ke section + play music
                    setTimeout(() => {
                        openSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

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
        var targetDate = new Date("December 14, 2025 23:59:59").getTime();

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
    <script src="asset/js/main.js"></script>
</body>

</html>