<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: profile.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["lusername"];
  $password = $_POST["lpassword"];
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
?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
  </body>
</html> -->
