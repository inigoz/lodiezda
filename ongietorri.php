<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
		<meta charset="utf-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="ikonoak/style.css">
		<link rel="stylesheet" href="estiloak/galeriaestiloa.css">


</head>
<body>
	<?php
		session_start();
		$sesioa = $_SESSION['erabiltzailea'];
		if ($sesioa == null || $sesioa = '') {
			echo "Ez duzu baimenik";
			die();
			header:('location:login.php');
		}
	?>
	<header class="main-header">
		<div class="container container--flex">
			<div class="logo-container column column--50">
				<h1 class="logo">LodiEzDa</h1>
				<h2 class="main-header__contactInfo__ongietorri">
					<span class="">Ongi Etorri!! <?php echo $_SESSION['erabiltzailea'] ?></span>
				</h2>
			</div>
			<div class="main-header__contactInfo column column--50">
				<p class="main-header__contactInfo__phone">
					<span class="icon-telegram">600-703-861</span>
				</p>
				<p class="main-header__contactInfo__address">
					<span class="icon-whatsapp">Bera - Nafarroa - Euskal Herria</span>
				</p>
			</div>
		</div>		
	</header>

	<nav class="main-nav">
		<div class="container container--flex">
			<span class="icon-youtube2" id="btnmenu" img src="Argazkiak/indice.ico"></span>		
			<ul id="menu" class="menu">
				<li class="menu__item"><a href="index.html" class="menu__link">Slackline</a></li>
				<li class="menu__item"><a href="albisteak.html" class="menu__link">Albisteak</a></li>
				<li class="menu__item"><a href="galeria.html" class="menu__link">Galeria</a></li>
				<li class="menu__item"><a href="materialaerakutsi.php" class="menu__link">Artikuluak</a></li>
				<li class="menu__item"><a href="materialagehitu.php" class="menu__link">Materiala gehitu</a></li>
				<li class="menu__item"><a href="blog.html" class="menu__link">Blog</a></li>			
			</ul>
			<div class="social-icon__link">
				<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
				<a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
				<a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
			</div>
		</div>
	</nav>
	
	<section id="argazki" class="banner">
		<img src="argazkiak/12.jpg" alt="" class="banner__img">
		<div class="banner__content">Hemen irudirik onenak dauzkazu</div>
	</section>

	<main>
		<section class="group group--color">
			<div class="container">
				<h2 class="main__title">Ongi Etorria</h2>
				<p class="main__txt">Tedsakfasdlghadfsdfasdfdsfadsfdasfdsafdsfdsafdsafdsf dfads df dsf dsfdsffdsf   dfd fd fd fdf alssdghakdsljgklasdjfkajsdkfjdsdsjfj</p>
			</div>
		</section>

		<section class="group main__about__description">
			<div class="container container--flex">
				<div class="column column--50">
					<img src="argazkiak/12.jpg" alt="">
				</div>
				<div class="column column--50">
					<h3 class="column__txt">Imaginazioari bueltak eman</h3>
					<p class="column__txt">dsfasdgfasaskdjfksdjlfka df df dfd sd fd fdf dsfa  fdf jsdflkdjasflkjasdfl</p>
					<a href="" class="btn btn--contact">Kontaktua</a>
				</div>
			</div>
		</section>

		<section class="group today-special">
			<h4 class="group__title">Gaurko berezitasuna</h4>
			<div class="container container--flex">
				<div class="column column--50-25">
					<img src="argazkiak/12.jpg" alt="" class="today-special__img">
					<div class="today-special__title">1 eguneko espezialitatea</div>
					<div class="today-special__price">99€</div>
				</div>
				<div class="column column--50-25">
					<img src="argazkiak/12.jpg" alt="" class="today-special__img">
					<div class="today-special__title">2 eguneko espezialitatea</div>
					<div class="today-special__price">99€</div>
				</div>
				<div class="column column--50-25">
					<img src="argazkiak/12.jpg" alt="" class="today-special__img">
					<div class="today-special__title">3 eguneko espezialitatea</div>
					<div class="today-special__price">99€</div>
				</div>
				<div class="column column--50-25">
					<img src="argazkiak/12.jpg" alt="" class="today-special__img">
					<div class="today-special__title">4 eguneko espezialitatea</div>
					<div class="today-special__price">99€</div>
				</div>
			</div>
		</section>

	</main>
	<footer class="main-footer">
		<div class="container container--flex">
			<div class="column column--33">
				<h5 class="column__title">Zergatik gu bisitatu?</h5>
				<p class="column__txt">Ez izan zalantzarik sarean dagoen lekurik onena da eta</p>
			</div>
			<div class="column column--33">
				<h6 class="column__title">Kontaktatu gurekin</h6>
				<p class="column__txt">Zalain auzoa 37 - Bera Euskal Herria</p>
				<p class="column__txt">Telefonoa: 600-703-861</p>
				<p class="column__txt">tetitetilla1987@gmail.com</p>
			</div>
			<div class="column column--33">
				<h6 class="column__title">Gure sare sozialetan jarraitu</h6>
				<p class="column__txt"><a href="" class="icon-facebook">&nbsp Facebook</a></p>
				<p class="column__txt"><a href="" class="icon-twitter">&nbsp Twitter</a></p>
				<p class="column__txt"><a href="" class="icon-instagram">&nbsp Instagram</a></p>
			</div>
			<p class="copy">© LodiEzDa | Todos los derechos reservados</p>
		</div>	
	</footer>
	<script src="menu.js"></script>
</body>
</html>