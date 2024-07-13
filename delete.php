<?php
require_once('connection.php');


    $c_id=$_GET['c_id'];
    $delete = mysqli_query($conn,"DELETE FROM course WHERE c_id='$c_id'");

//$query = "select * from course";
 //$result = mysqli_query($conn, $query);
if($delete)
{
    echo
    "<script>
    alert('Course Deleted succesfully....'); window.location.href='manage_course.php';
     </script>";
}
?>