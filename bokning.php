<?php include('connectdb.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tack! | Thaitani</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
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

    <div class="confirm-bord">
        <h1>Du har nu bokat bord!</h1>
    </div>

    <?php

    session_start();

    if( isset($_POST['namn']) && isset($_POST['telefon']) && isset($_POST['date']) && isset($_POST['tid']) && isset($_POST['personer'])) {

    $namn = $_POST['namn'];
    $telefon = $_POST['telefon'];
    $date = $_POST['date'];
    $tid = $_POST['tid'];
    $personer = $_POST['personer'];

    $query = "INSERT INTO boka (namn,telefon,date,tid,personer) VALUES ('$namn','$telefon','$date','$tid','$personer');";

    if (mysqli_query($conn, $query)) {
        mysqli_close($conn);
        // header('Location: ../boka.php');
    exit;
    }
}
?>

    <?php
        include("include/footer.php");
    ?>

</body>
</html>