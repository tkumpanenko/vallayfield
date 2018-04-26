<?php require_once("app/init.php"); ?>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Valleyfield</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,600,600i|Montserrat:400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= asset('styles/main.css') ?>">

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="main-body-wrapper">
		<header class="navbar-fixed-top main-header">
			<nav class="navbar hidden-md-down">
			  <div class="container">
				<ul class="nav navbar-nav main-menu">
				  <li><a href="#consultations">Consultations</a></li>
				  <li><a href="#pourquoi">Pourquoi cannabis?</a></li>
				  <li><a class="navbar-brand" href="#banner"><img src="src/images/logo.png" alt="logo"></a></li>
				  <li><a href="#medical">Cannabis medical chez toi</a></li>
				  <li><a href="#nous">nous joindre</a></li>
				</ul>
			  </div>
			</nav>

			<nav class="hidden-md-up mob-nav">
				<button data-toggle="collapse" data-target="#mob-nav-collapse">
					<!-- <i class="fas fa-bars"></i>  -->
					<span><i class="fas fa-chevron-up"></i></span> </button>
				<div id="mob-nav-collapse" class="collapse">
					<ul class="main-menu">
						<li><a href="#consultations">Consultations</a></li>
						<li><a href="#pourquoi">Pourquoi cannabis?</a></li>
						<li><a href="#medical">Cannabis medical chez toi</a></li>
						<li><a href="#nous">nous joindre</a></li>
					</ul>
				</div>
			</nav>
		</header>