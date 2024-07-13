<?php
require 'connection.php';
if(isset($_POST["submit"])){
    $c_id=$_POST["c_id"];
    $year=$_POST["year"];
$c_name=$_POST["c_name"];
$duration=$_POST["duration"];
$fees=$_POST["fees"];
$intake=$_POST["intake"];
// $f_seats=$_POST["f_seats"];
// $v_seats=$_POST["v_seats"];
$c_type=$_POST["c_type"];
$duplicate = mysqli_query($conn, "SELECT * FROM course WHERE c_id ='$c_id'");
if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script>
    alert('course Already Exists.....');
     </script>";
}
else{
        $query= "INSERT INTO course VALUES('$c_id','$year','$c_name','$duration','$fees','$intake','','','$c_type')";
        mysqli_query($conn,$query);
        echo 
     "<script>
    alert('Add course Successfully.....');
     </script>";
    }
 }
?>


<!DOCTYPE html>
<html lang="en" dir ="ltr">
    <head>
        <meta charset ="utf-8">
        <title> ADD COURSES </title>
</head>
<body>
    <h2> ADD COURSE <DETAILS></DETAILS> </h2>
    <form class="" action="" method="post" autocomplete="off">
            
        
        <label for="c_id">course id: </label>
        <input type="c_id" name="c_id" id="c_id" required value=""><br>
        <label for="year">Year Of Start: </label>
        <input type="year" name="year" id="year" required value=""><br>
        <label for="name">Course name: </label>
        <input type="text" name="c_name" id="c_name" required value=""><br>
        <label for="duration">Course Duration: </label>
        <input type="duration" name="duration" id="duration" required value=""><br>
        <label for="fees">Course fees: </label>
        <input type="fees" name="fees" id="fees" required value=""><br>
        <label for="intake">Intake: </label>
        <input type="intake" name="intake" id="intake" required value=""><br>
        <label for="c_type">course type: </label>
        <input type="c_type" name="c_type" id="c_type" required value=""><br>
        <button type="submit" name="submit">Submit</button>
        <button><a href="admindash.php">back</a></button>
        
    </form>
    <br>

</body>
</html>