<?php
session_start();
$conn = mysqli_connect("localhost","root","","p");
if($conn)
{
    echo"";
}
else{
    echo"connection failed....try again!!!!";
}
?>