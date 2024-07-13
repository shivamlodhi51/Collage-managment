<?php
require_once('connection.php');


    $app_id=$_GET['app_id'];
    $delete = mysqli_query($conn,"DELETE FROM application WHERE app_id='$app_id'");

if($delete)
{
    echo
    "<script>
    alert('Application rejected successfully.....'); window.location.href='disapplication.php';
     </script>";
}
?>