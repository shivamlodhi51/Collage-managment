<?php

require 'connection.php';
session_start();
$user_id = $_SESSION['id'];

if(isset($_POST['updateprofile'])){

   $update_firstname = mysqli_real_escape_string($conn, $_POST['update_firstname']);
   $update_lastname = mysqli_real_escape_string($conn, $_POST['update_lastname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_no =  $_POST["update_no"];
   $update_dob = mysqli_real_escape_string($conn, $_POST['update_dob']);
   $update_gender = mysqli_real_escape_string($conn, $_POST['update_gender']);

   mysqli_query($conn, "UPDATE `register` SET firstname = '$update_firstname', lastname = '$update_lastname',
   num = $update_no, email = '$update_email', dob = '$update_dob', gender = '$update_gender' WHERE id = $user_id") or die('query failed');

echo
      
      header("Location: profile.php");} ?>