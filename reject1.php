<?php
require_once('connection.php');


$app_id = $_GET['app_id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$fname = $_GET['fname'];
$dob = $_GET['dob'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$num = $_GET['num'];
$category = $_GET['category'];
$hs = $_GET['10%'];
$hr = $_GET['12%'];
$graduation = $_GET['graduation%'];
$c_name = $_GET['c_name'];
$c_id = $_GET['c_id'];
$address = $_GET['address'];


$duplicate = mysqli_query($conn, "SELECT * FROM student WHERE app_id = $app_id ");
  
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('This Application form is accepted so it cannot be rejected now'); window.location.href='disapplication.php';</script>";
  }
else{

    $update = mysqli_query($conn,"UPDATE `application` SET `status`='Rejected' WHERE app_id='$app_id'");

if($update)
{
    echo
    "<script>
    alert('Application rejected successfully.....'); window.location.href='disapplication.php';
     </script>";
}}
?>