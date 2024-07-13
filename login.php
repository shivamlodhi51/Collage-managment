<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: profile.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["lusername"];
  $password = $_POST["lpassword"];

  if($email == "admin" && $password == 12345) 
    { $_SESSION["login"] = true;
    $_SESSION["id"] = "Admin";
    header("Location: admindash.php");}
  

else{
  $result = mysqli_query($conn, "SELECT * FROM register WHERE  email = '$email'");
  $row = mysqli_fetch_assoc($result);


  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: profile.php");
    }
    else{
      echo "<script>alert('Wrong Password. Please enter correct password'); window.location.href='login.html';</script>";
    }
  }
  else{
    echo "<script>alert('User Not Registered.'); window.location.href='login.html';</script>";
  }
}
}
?>

