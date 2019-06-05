<?php include('../connectdb.php'); ?>

<?php

	$id = isset($_GET['id']) ? $_GET['id'] : '';

	if (!$conn) {
    	die("THAI:Connection failed: " . mysqli_connect_error());
	}

	$sql = "DELETE FROM boka WHERE id = $id"; 

	if (mysqli_query($conn, $sql)) {
    	mysqli_close($conn);
    	header('Location: ../adminpanel/dashboard.php');
    exit;
	} else {
    	echo "THAI:Error deleting booking!";
	}
	
?>