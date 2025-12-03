<?php
    include('connect.php');
	session_start();


    // Jika belum login, redirect ke halaman login
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
	$namaLengkap = $_SESSION['nama_lengkap'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="../asset/img/fav_icon.png"/>

	<title>Dashboard | INSTUDIO</title>

	<link href="../asset/css/app.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- boostrap -->
    <link rel="stylesheet" href="../asset/css/main.css">

     <!-- jquery -->

	<style>
		/* FONT */
		@font-face /*perintah untuk memanggil font eksternal*/
        {
            font-family: 'inter'; /*memberikan nama bebas untuk font*/
            src: url('font/inter.ttf');/*memanggil file font eksternalnya di folder nexa*/
        }
*{
    font-family: 'inter', sans-serif;
}
	</style>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
          <span class="align-middle"><img src="../asset/img/logo_instudio_white.svg" width="70%" alt="logo instudio white"></span>
        </a>

				<ul class="sidebar-nav">
				<li class="sidebar-item">
						<a class="sidebar-link" href="../" target="_BLANK"><i class="bi bi-arrow-right fs-4"></i>Lihat Undangan</a>
					</li>
					<li class="sidebar-header">
						Tools
					</li>
					
					<li <?php if($_GET['url'] == 'daftar_pengguna'){ echo "class='sidebar-item active'";}else{echo"class='sidebar-item'";}?> >
						<a class="sidebar-link" href="?url=daftar_pengguna">
						<i class="bi bi-people-fill fs-4"></i> <span class="align-middle m-auto">Daftar Undangan</span>
						</a>
					</li>

					<li <?php if($_GET['url'] == 'catat'){ echo "class='sidebar-item active'";}else{echo"class='sidebar-item'";}?>>
						<a class="sidebar-link" href="?url=catat">
						<i class="bi bi-file-earmark-plus fs-4"></i> <span class="align-middle m-auto">Catat</span>
						</a>
					</li>
					
					<li <?php if($_GET['url'] == 'pesan'){ echo "class='sidebar-item active'";}else{echo"class='sidebar-item'";}?>>
						<a class="sidebar-link" href="?url=pesan">
						<i class="bi bi-file-earmark-plus fs-4"></i> <span class="align-middle m-auto">Pesan</span>
						</a>
					</li>


					<li class="sidebar-item my-3">
						<a class="sidebar-link" href="https://wa.me/+6287715764870" target="_BLANK"><i class="bi bi-question fs-4"></i>Tanya Developer</a>
					</li>
				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="../asset/img/user.png" class="avatar img-fluid rounded me-1" alt="foto-profil"><span class="text-dark"><?php echo $namaLengkap; ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="?url=catat"><i class="bi bi-person-fill fs-4"></i>Catat</a>
								<a class="dropdown-item" href="?url=daftar_pengguna"><i class="bi bi-clipboard-data fs-4"></i>Data</a>
								<div class="dropdown-divider"></div>
								 <a href="proses/logout" class="dropdown-item text-danger" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="bi bi-box-arrow-left fs-4"></i> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		

		<?php 
		include 'config_page.php'; 
		?>
		<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-12 text-center">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>INSTUDIO</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Dashboard Pngelolaan Undangan Digital</strong></a>								&copy;
							</p>
						</div>
					</div>
				</div>
			</footer>
	
		</div>
	</div>

	<script src="../asset/js/app.js"></script>




</body>

</html>