<!DOCTYPE html>
<html>
<head>
	<title>Hem | Thaitanic</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/lunchmeny.js" defer></script>

	<header class="thai-header">
		<div class="thai-container">
			<a href="index.php"><img src="img/logo.png" alt="ThaiTanic Logo" width="120" class="thai-logo" /></a>
			
			<?php
				include("include/nav.php");
			?>

		</div>
	</header>

	<div class="thai-container">
		<div class="thai-content">
			<section class="thai-top-a">
				<img src="img/main-banner.png" alt="Thaitanic Banner"/>
			</section>
			<article class="thai-article">
				<h1>Välkommen till Thaitanic</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>

				<h2>Om oss!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				
				<h3>Vår specialmat!</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

			</article>
		</div>

		<aside class="thai-sidebar">
			<div class="oppettider">
				<h3>Öppettider</h3>
					<li><strong>Mån–Tors</strong> 11:00–00:00</li>
					<li><strong>Fredag</strong> 10:00–02:00</li>
					<li><strong>Lör–Sön</strong> 11:30–03:00</li>
				<br>
				<h3>Kontaktuppgifter</h3>
					<li><strong>Telefon</strong>: 012 - 34 56 78 </li>
					<li><strong>E-post</strong>: contact@thaitanic.se</li>
			</div>

			<div class="thai-special-food open">
				<h3>Thai Lunchmeny 11-14</h3>
				<img src="img/1.jpg" width="250">
				<h4>TOM KHA GAI [ 89kr ]</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>

			<div class="thai-special-food closed">
				<div class="pop">Populär</div>
				<h3>Thai Special</h3>
				<img src="img/1.jpg" width="250">
				<h4>SOM TAM TALEY [ 150kr ]</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</aside>

	</div>

	<?php
		include("include/footer.php");
	?>
</body>
</html>