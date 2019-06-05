<?php include('connectdb.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Meny | Thaitanic</title>
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

	<div class="thai-meny-search">
		<form action="meny.php" method="GET">
			<input type="text" name="search" placeholder="Search food">
			<input type="submit" value=">>">
		</form>
	</div>

	<?php

	$search = "";
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }


	$query = "SELECT * FROM meny WHERE namn LIKE '%$search%' OR pris LIKE '%$search%'";
	mysqli_query($conn,"SET NAMES utf8");


	$result = mysqli_query($conn,$query);

	while($row = mysqli_fetch_array($result)){
	?>

	<div class="thai-meny-container">
			<div class="thai-meny-content">
				<section class="thai-meny-section">
					<div class="thai-meny-loop">
						<div class="thai-meny-namn">
							<p><?php echo $row['namn']; ?></p>	
						</div>
						<div class="thai-meny-bild">
							<img src=<?php echo $row["bild"]; ?>>
						</div>
						<div class="thai-meny-pris">
							<p><?php echo $row['pris']?> kr</p>
						</div>
						<div class="thai-meny-info">
							<p><?php echo $row['info']?></p>
						</div>
							<div class="thai-meny-side-info">
								<h1>Information</h1>
								<div class="styrka">
								<?php for($i = 0; $i< $row["styrka"]; $i++){ ?>
			                    	<img src="img\styrka.png" height="22px" />
			                    <?php } ?>
								</div>
								<div class="gluten">
								<?php for($i = 0; $i< $row["gluten"]; $i++){ ?>
			                    	<img src="img\gluten.png" height="22px" />
			                    <?php } ?>
								</div>
								<div class="notter">
								<?php for($i = 0; $i< $row["notter"]; $i++){ ?>
			                    	<img src="img\notter.png" height="22px" />
			                    <?php } ?>
								</div>
								<div class="mjolk">
								<?php for($i = 0; $i< $row["mjolk"]; $i++){ ?>
			                    	<img src="img\mjolk.png" height="22px" />
			                    <?php } ?>   
								</div>
							</div>
					</div>
				</section>
			</div>
		</div>

		  <?php
    }
    ?>
    


	<?php include("include/footer.php"); ?>

</body>
</html>