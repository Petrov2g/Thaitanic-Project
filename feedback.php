<?php include('connectdb.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback | Thaitanic</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<header class="thai-header">
		<div class="thai-container">
			<a href="index.php"><img src="img/logo.png" alt="ThaiTanic Logo" width="120" class="thai-logo" /></a>
			
			<?php
				include("include/nav.php");
			?>

		</div>
	</header>

		<section class="thai-feedback">
			<div class="feedback_title">
				<h1>Feedback</h1>
				<p>Leaving feedback is a great way to rate your experience with <strong>Thaitanic</strong></p>
			</div>
			<div class="feedback_form">
				<form action="action/feedback.php" method="POST">
					<label>Namn <span class="red">*</span></label><br>
					<input type="text" name="namn" required="" placeholder="Namn"><br>
					<label>Recension <span class="red">*</span></label><br>
					<input type="text" name="recension" required="" placeholder="Kommentar"><br>
					<input type="submit" value="Skicka">
				</form>	
			</div>
		</section>

		<!-- Database connection -->
	<?php

	$query = "SELECT * FROM recension";
	mysqli_query($conn,"SET NAMES utf8");

	$result = mysqli_query($conn,$query);

	while($row = mysqli_fetch_array($result)){
	?>

	<article>
		<div class="feedback_loop">
			<div class="feedback_namn">
				<p><strong>Namn</strong>: <?php echo $row["namn"]; ?></p>
			</div>
			<div class="feedback_komentar">
				<p><strong>Kommentar</strong>: <?php echo $row["recension"]; ?></p>
			</div>
		</div>
	</article>

	<?php } ?>


	<?php
		include("include/footer.php");
	?>

</body>
</html>