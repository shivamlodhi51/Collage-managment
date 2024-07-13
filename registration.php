<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: profile.php");
}
if(isset($_POST["submit"])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $no = $_POST["no"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE num = '$no' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    
    echo "<script>alert('Phone Number or Email already registered'); window.location.href='register-form.html';</script>";
  }
  else{
    if($password == $cpassword){
      $query = "INSERT INTO register VALUES('','$firstname','$lastname','$dob','$gender','$email','$no','$password','$cpassword',CURRENT_TIMESTAMP)";
      mysqli_query($conn, $query);
     
      echo "<script>alert('Registered Successfully...'); window.location.href='login.html';</script>";
    }
    else{
        echo "<script>alert('Password does not match. Please confirm your password'); window.location.href='register-form.html';</script>";
    }
  }
}
?>