<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $app_id = $_POST["appid"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $fname = $_POST["fname"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $num = $_POST["num"];
  $category = $_POST["category"];
  $hs = $_POST["10%"];
  $hr = $_POST["12%"];
  $graduation = $_POST["graduation%"];
  $c_name = $_POST["parent_selection"];
  $c_id = $_POST["child_selection"];
  $address = $_POST["address"];
  $duplicate = mysqli_query($conn, "SELECT * FROM application WHERE app_id = $app_id ");
  
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('Your Admission form already submitted'); window.location.href='profile.php';</script>";
  }
  else{
    
      $query = "INSERT INTO application VALUES('$app_id','$firstname','$lastname','$fname','$dob','$gender','$email','$num','$category','$hs','$hr','$graduation','$c_name','$c_id','$address','Pending')";
      mysqli_query($conn, $query);
     
      echo "<script>alert('Your Application submitted successfully'); window.location.href='admissionform.php';</script>";
     
    }
    
  }

?>