<?php
require 'connection.php';

if(isset($_POST["acceptaap.php"])){
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
  $c_name = $_POST["c_name"];
  $c_id = $_POST["c_id"];
  $address = $_POST["address"];
  $duplicate = mysqli_query($conn, "SELECT * FROM application WHERE app_id = $app_id ");
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('Application already submitted');</script>";

  }

else{
  
    $query = "INSERT INTO student VALUES('$app_id','$firstname','$lastname','$fname','$dob','$gender','$email','$num','$category','$hs','$hr','$graduation','$c_name','$c_id','$address')";
    mysqli_query($conn, $query);
   
    echo "<script>alert('Application submitted successfully');</script>";
   
  }
}

?>