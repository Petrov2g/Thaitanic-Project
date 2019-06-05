<!DOCTYPE html>
<html>
<head>
	<title>Boka bord | Thaitanic</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<script type="js/date.js" defer></script>
	<script
	  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
	  crossorigin="anonymous"></script>
	  <script
		  src="https://code.jquery.com/jquery-3.4.1.js"
		  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		  crossorigin="anonymous"></script>

	<header class="thai-header">
		<div class="thai-container">
			<a href="index.php"><img src="img/logo.png" alt="ThaiTanic Logo" width="120" class="thai-logo" /></a>
			
			<?php
				include("include/nav.php");
			?>

		</div>
	</header>

	<section class="thai-boka-section">
		<div class="thai-boka-form">
			<img src="img/boka.png" alt="Boka Bord Form" width="200">
			<h1>Boka Bord</h1>
			<form action="bokning.php" method="POST">
				<label>Namn <span class="red">*</span></label><br>
				<input type="text" name="namn" placeholder="Namn..." required=""><br>
				<label>Telefon <span class="red">*</span></label><br>
				<input type="text" name="telefon" placeholder="Telefon..."required=""><br>
				<label>Datum <span class="red">*</span></label><br>
				<input type="date" name="date"required=""><br>
				<label>Tid <span class="red">*</span></label><br>
				<select name="tid" required="">
  					<option value="12:00">12:00</option>
 					<option value="13:00">13:00</option>
  					<option value="14:00">14:00</option>
  					<option value="15:00">15:00</option>
  					<option value="16:00">16:00</option>
  					<option value="17:00">17:00</option>
  					<option value="18:00">18:00</option>
  					<option value="19:00">19:00</option>
  					<option value="20:00">20:00</option>
  					<option value="21:00">21:00</option>
  					<option value="22:00">22:00</option>
  					<option value="23:00">23:00</option>
				</select><br>
				<label>Personer <span class="red">*</span> <strong>[Min 1 - Max 7]</strong></label><br>
				<input type="number" name="personer" placeholder="Antal personer..."required="" min="1" max="7"><br>
				<input type="submit" value="Boka Bord">
			</form>
		</div>
	</section>

	<?php
		include("include/footer.php");
	?>

</body>
</html>