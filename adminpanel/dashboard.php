<?php include('../connectdb.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | Thaitanic</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="icon" type="/image/png" sizes="32x32" href="../img/favicon-32x32.png">
</head>
<body>

	<header class="thai-header">
		<div class="thai-container">
			<a href="../index.php"><img src="../img/logo.png" alt="ThaiTanic Logo" width="120" class="thai-logo" /></a>
			<nav class="thai-nav">
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="../index.php">Webbsida</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section>
		<div class="booking-remove">
			<table class="bokningar">
		<tr>
			<th>BOKNINGAR</th>
		</tr>
		<tr>
			<th>ID</th>
			<th>Namn</th>
			<th>Telefon</th>
			<th>Datum</th>
			<th>Tid</th>
			<th>Personer</th>
			<th>Avboka</th>
		</tr>

		<?php

			if ($conn-> connect_error) {
				die("THAI:Connection failed:". $conn-> connect_error);
			}

			$sql = "SELECT * FROM boka";
			$result = $conn-> query($sql);

			if($result-> num_rows > 0) {
				while ($row = $result-> fetch_assoc()) {

				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["namn"]."</td>";
				echo "<td>".$row["telefon"]."</td>";
				echo "<td>".$row["date"]."</td>";
				echo "<td>".$row["tid"]."</td>";
				echo "<td>".$row["personer"]."</td>";
				echo "<td>
					<form action='../action/avboka.php?id=".$row["id"]."' method='POST'>
						<input class='avboka' type='submit' value='Avboka'>
					</form>
				</td>";
				echo "</tr>";
				}
				echo "</table>";
			}

			$conn-> close();
			?>
	</table>
		</div>
	</section>



	<footer class="thai-footer">
		&copy; Copyright 2019 | ThaiTanic
	</footer>

</body>
</html>