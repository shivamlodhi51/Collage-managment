<?php
include 'connection.php';
// $app_id = $_GET['app_id'];
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM register WHERE id = $id");
    $app = mysqli_query($conn, "SELECT * FROM application WHERE app_id = $id");
    $st = mysqli_query($conn, "SELECT * FROM student where sid = $id");

    $row = mysqli_fetch_assoc($result);
    $approw = mysqli_fetch_assoc($app);
    $strow = mysqli_fetch_assoc($st);
   
    if(mysqli_num_rows($app) == 0 ){
        echo "<script>alert('Please Submit Your Admission Form First..'); window.location.href='admissionform.php';</script>";
      }
     else if(mysqli_num_rows($app) > 0 ){
        echo "<script>alert('Click OK To Check Your Application Status'); window.location.href='status.php';</script>";
      }



  }
  else{
    header("Location: login.html");
  }



?>

