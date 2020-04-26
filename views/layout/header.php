<!DOCTYPE html>
<html lang="es">
<head>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="ico/png" href="<?php echo BASE_URL;?>assets/imagen/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/scss/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/iconos/style.css">

	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/main.js"></script>
	<meta charset="utf-8">
	<title>Siawebinar</title>
</head>
<body>

<header class="header">
	<nav class="header__content">
		<figure class="header__fig">
			<a href="<?php echo BASE_URL;?>">
				<img class="header__logo" src="<?php echo BASE_URL;?>assets/imagen/logo.png">
			</a>
			<span id="btn-menu" class="header__btn-menu icon-menu"></span>
		</figure>
		<ul id="header__menu" class="header__menu">
			<li class="header__item">
				<a class="header__item--a" href="<?php echo BASE_URL;?>evento/">Eventos</a>
			</li>
			<li class="header__item">
				<a class="header__item--a" href="<?php echo BASE_URL;?>semilleros/">Semilleros</a>
			</li>
		</ul>
	</nav>
</header>