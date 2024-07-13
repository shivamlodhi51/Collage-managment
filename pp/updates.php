<?php
include 'connection.php';
$app_id = $_GET['app_id'];
$select ="SELECT * FROM student WHERE app_id = '$app_id'";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<body>
<div>
 <form class="" action="" method="post" autocomplete="off">


<label for="firstname">firstname: </label> 
<input value ="<?php echo $row['firstname']?>"type="text" name="firstname" id="firstname" required value=""><br>
<label for="lastname">lastname: </label>
<input value ="<?php echo $row['lastname']?>"type="text" name="lastname" id="lastname" required value=""><br>
<label for="fname">fathername: </label>
<input value ="<?php echo $row['fname']?>"type="text" name="fname" id="fname" required value=""><br>
<label for="dob">dob : </label>
<input value ="<?php echo $row['dob']?>"type="text" name="dob" id="dob" required value=""><br>
<label for="gender">gender: </label>
<input value ="<?php echo $row['gender']?>"type="text" name="gender" id="gender" required value=""><br>
<label for="email">email: </label>
<input value ="<?php echo $row['email']?>"type="email" name="email" id="email" required value=""><br>
<label for="num">contact no: </label>
<input value ="<?php echo $row['num']?>"type="num" name="num" id="num" required value=""><br>
<label for="category">category: </label>
<input value ="<?php echo $row['category']?>"type="text" name="category" id="category" required value=""><br>
<label for="c_name">cname: </label>
<input value ="<?php echo $row['c_name']?>"type="text" name="c_name" id="c_name" required value=""><br>
<label for="c_id">cid: </label>
<input value ="<?php echo $row['c_id']?>"type="text" name="c_id" id="c_id" required value=""><br>
<label for="address">address: </label>
<input value ="<?php echo $row['address']?>"type="text" name="address" id="address" required value=""><br>


<button type="submit" name="update_btn">update</button>
<button><a href="disstudent.php">back</a></button>

</form>
</div>
<?php
if(isset($_POST["update_btn"])){
    
    $firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$fname=$_POST["fname"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$num=$_POST["num"];
$category=$_POST["category"];
$c_name=$_POST["c_name"];
$c_id=$_POST["c_id"];
$address=$_POST["address"];

$update ="UPDATE student SET firstname='$firstname',lastname='$lastname',fname='$fname',dob='$dob',gender='$gender',email='$email',num='$num',category='$category',c_name='$c_name',c_id='$c_id',address='$address' WHERE app_id='$app_id'";
$data = mysqli_query($conn,$update);

if($data){
    echo
    "<script>
    alert('record updated successfully.....');
     </script>";
     
}
else{ 
    
        echo 
     "<script>
    alert('please try again....');
    </script>";
    
}
 }
?>
</body>
<html>