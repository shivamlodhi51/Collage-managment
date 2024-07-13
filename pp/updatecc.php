<?php
include 'connection.php';
$c_id = $_GET['c_id'];
$select ="SELECT * FROM course WHERE c_id = '$c_id'";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">

<body>
<div>
 <form class="" action="" method="post" autocomplete="off">
 <!-- <label for="c_id">course id: </label> -->
 <!-- <input value ="<?php echo $row['c_id']?>" type="c_id" name="c_id" id="c_id" required value=""><br> -->
<label for="year">Year Of Start: </label>
<input value ="<?php echo $row['year']?>"type="year" name="year" id="year" required value=""><br>
<label for="name">Course name: </label>
<input value ="<?php echo $row['c_name']?>"type="text" name="c_name" id="c_name" required value=""><br>
<label for="duration">Course Duration: </label>
<input value ="<?php echo $row['duration']?>"type="duration" name="duration" id="duration" required value=""><br>
<label for="fees">Course fees: </label>
<input value ="<?php echo $row['fees']?>"type="fees" name="fees" id="fees" required value=""><br>
<label for="intake">Intake: </label>
<input value ="<?php echo $row['intake']?>"type="intake" name="intake" id="intake" required value=""><br>
<label for="c_type">course type: </label>
<input value ="<?php echo $row['c_type']?>" type="c_type" name="c_type" id="c_type" required value=""><br>
<button type="submit" name="update_btn">update</button>
<button><a href="manage_course.php">back</a></button>

</form>
</div>
<?php
if(isset($_POST["update_btn"])){
    // $c_id=$_POST["c_id"];
    $year=$_POST["year"];
$c_name=$_POST["c_name"];
$duration=$_POST["duration"];
$fees=$_POST["fees"];
$intake=$_POST["intake"];
$c_type=$_POST["c_type"];

$update ="UPDATE course SET  year='$year',c_name='$c_name',duration='$duration',fees='$fees',intake='$intake',c_type='$c_type' WHERE c_id='$c_id'";
$data = mysqli_query($conn,$update);

if($data){
    echo
    "<script>
    alert('data updated successfully.....');
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