<?php
include 'connection.php';
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

$duplicate = mysqli_query($conn, "SELECT * FROM student WHERE sid = $app_id ");
  
  if(mysqli_num_rows($duplicate) > 0){
    echo "<script>alert('This Application Already Accepted'); window.location.href='disapplication.php';</script>";
  }
else{
$select ="INSERT INTO `student` (`sid`, `firstname`, `lastname`, `fname`, `dob`, `gender`, `email`, `num`, `category`, `c_name`, `c_id`, `address`) VALUES ('$app_id', '$firstname', '$lastname', '$fname', '$dob', '$gender', '$email', '$num', '$category', '$c_name', '$c_id', '$address');";
$data = mysqli_query($conn,$select);
if($data){
  $updquery0 = "UPDATE `course` SET f_seats=f_seats+1 WHERE c_id='$c_id'";
  $run0 = mysqli_query($conn,$updquery0);
  $updquery2 = "UPDATE `course` SET v_seats=v_seats-1 WHERE c_id='$c_id'";
  $run2 = mysqli_query($conn,$updquery2);
$updquery = "UPDATE `application` SET `status`='Accepted' WHERE app_id='$app_id'";
$run = mysqli_query($conn,$updquery);

echo
    "<script>
    alert('Student added successfully..'); window.location.href='disapplication.php';
     </script>";
}
}

?>