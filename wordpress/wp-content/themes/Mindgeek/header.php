<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<title>Modulo 11</title>
	<link href="https://fonts.googleapis.com/css?family=Candal|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style1.css" />
</head>
<body>
	<header>
	
		<!-- <nav class="container">
		
			<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo"></a>
			<a href="mutualise.html"><i class="fas fa-users"></i>Serveur Mutualisé</a>
			<a href="dedié.html"><i class="fas fa-user"></i>Serveur dédié</a>
			<a href="cloud.html"><i class="fas fa-cloud"></i>Solution"Cloud"</a>
			<a href="contact.html"><i class="fas fa-envelope"></i>Contact</a>
		</nav> -->
		
		<?php 
			$defaults = array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'echo' 		=> false,
				);
			echo strip_tags(wp_nav_menu( $defaults), '<nav><a><i><img>');
			?>
			
<?php
	if(is_front_page()):
?>
			<section class="intro">
			<h1>L'hébergement à prix libre</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
			</p>		
		</section>
<?php
endif;
?>

		<div class="recherche">
			<form>
			
				<input name="recherche" type="text" placeholder="Que recherchez-vous?">
			</form>
		</div> 
	</header>
	<main class="container">