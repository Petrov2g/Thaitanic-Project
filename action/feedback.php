<?php include('../connectdb.php'); ?>

<?php

session_start();

if( isset($_POST['namn']) && isset($_POST['recension'])){


    $namn = $_POST['namn'];
    $recension = $_POST['recension'];

    $query = "INSERT INTO recension (namn,recension) VALUES ('$namn','$recension');";

    if(mysqli_query($conn,$query)){
       header("Location: ../feedback.php");
    }
  }
?>