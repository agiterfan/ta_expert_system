<!DOCTYPE html>
<html lang="en">
<head>
	<title>Expert System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/aos.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/jquery.timepicker.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/'); ?>css/style.css">
</head>
<body>
<div class="py-md-5 py-4 border-bottom">
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
				<a class="navbar-brand" href="<?= base_url('') ?>">WAOS</span></a>
			</div>
			<div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
			</div>
			<div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container d-flex align-items-center">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav m-auto">
				<li class="nav-item"><a href="<?= base_url('') ?>" class="nav-link">Beranda</a></li>
				<li class="nav-item active"><a href="<?= base_url('/#penyakit-gigi') ?>" class="nav-link">Penyakit
						Gigi</a>
				</li>
				<li class="nav-item"><a href="<?= base_url('diagnosa') ?>" class="nav-link">Konsultasi</a></li>
				<li class="nav-item"><a href="<?= base_url('petunjuk') ?>" class="nav-link">Petunjuk</a></li>
				<li class="nav-item"><a href="<?= base_url('tentang') ?>" class="nav-link">Tentang Kami</a></li>
				<?php if (empty($this->session->userdata('loginUser'))) { ?>
					<li class="nav-item"><a href="<?= base_url('login') ?>" class="nav-link">Login</a></li>
				<?php } else { ?>
					<li class="nav-item"><a href="<?= base_url('login/logout') ?>" class="nav-link">Logout</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/frontend/images/bg_1.jpg');"
		 data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Penyakit Pulpitis</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<h2 class="mb-3">Penyakit Pulpitis</h2>
				<p>
					<img src="<?= base_url() . "assets/frontend/images/image_2.jpg" ?>" alt="" class="img-fluid">
				</p>
				<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in.
					Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error
					dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi
					repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
				<p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod,
					est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab
					consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit,
					porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
				<p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem
					pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo
					soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni.
					Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
				<p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique
					asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates
					beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum
					provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur
					recusandae!</p>
				<p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo
					a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis
					alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta
					doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis,
					inventore?</p>

			</div> <!-- .col-md-8 -->

			<div class="col-lg-4 sidebar ftco-animate">
				<div class="sidebar-box ftco-animate">
					<h3>Jenis Penyakit Gigi</h3>
					<ul class="categories">
						<li><a href="<?= base_url('penyakit/karies') ?>" target="_blank">Karies Gigi</a></li>
						<li><a href="<?= base_url('penyakit/pulpitis') ?>" target="_blank">Pulpitis</a></li>
						<li><a href="<?= base_url('penyakit/gingivitis') ?>" target="_blank">Gingivitis</a></li>
						<li><a href="<?= base_url('penyakit/absesgusi') ?>" target="_blank">Abses Gusi</a></li>
						<li><a href="<?= base_url('penyakit/impaksi') ?>" target="_blank">Impaksi Gigi</a></li>
						<li><a href="<?= base_url('penyakit/periodontitis') ?>" target="_blank">Periodontitis</a></li>
					</ul>
				</div>
			</div><!-- END COL -->
		</div>
	</div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-5">
					<h2 class="ftco-heading-2 logo">WAOS</h2>
					<p>Konsultasi atas permasalahan gigi Anda.</p>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-5 ml-md-4">
					<h2 class="ftco-heading-2">Links</h2>
					<ul class="list-unstyled">
						<li><a href="<?= base_url('') ?>#"><span
										class="ion-ios-arrow-round-forward mr-2"></span>Beranda</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Penyakit
								Gigi</a></li>
						<li><a href="<?= base_url('diagnosa') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Konsultasi</a>
						</li>
						<li><a href="<?= base_url('petunjuk') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Petunjuk</a>
						</li>
						<li><a href="<?= base_url('tentang') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Tentang
								Kami</a></li>
						<li><a href="<?= base_url('profile') ?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Login</a>
						</li>
						<li><a href="<?= base_url('admin/login') ?>"><span
										class="ion-ios-arrow-round-forward mr-2"></span>Admin Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script>
					All rights reserved | WAOS
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00"/>
	</svg>
</div>


<script src="<?= base_url('assets/frontend/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/aos.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/jquery.timepicker.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/scrollax.min.js"></script>

<script src="<?= base_url('assets/frontend/'); ?>js/google-map.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>js/main.js"></script>

</body>
</html>
