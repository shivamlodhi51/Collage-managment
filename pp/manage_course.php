<?php
require('connection.php');

// if(isset($_GET['c_id'])){
//     $c_id=$_GET['c_id'];
//     $delete = mysqli_query($conn,"DELETE FROM 'course' WHERE c_id='$c_id'")
//     ;
// }


$query = "select * from course";
 $result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madhav Institute Of Technology And Science</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/mits-logo.png" type="image/png">

</head>
<body>
    <section id="sp-main-body" class="top_mvd_section">

        <div class="container">
    <div class="container-inner">
    
    
    <div class="row">
    
    <main id="sp-component" class="col-lg-12 ">
    <div class="sp-column ">
    <div id="system-message-container" aria-live="polite">
    </div>
    
    
    
    <div class="article-details " itemscope="" itemtype="https://schema.org/Article">
    <meta itemprop="inLanguage" content="en-GB">
    
    
    
    
    
    <div class="article-can-edit d-flex flex-wrap justify-content-between">
    </div>
    
    
    
    
    <h1>Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA <br> 
माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत</h1>
    
    <div itemprop="articleBody">
    <div><div class="row align-items-center"> 
    <div class="col-lg-12"> 
    <div class="left_head"> 
        <aside style="font-size:1.5em;border-top:7px solid rgb(238, 140, 29);padding:20px;">

            <h3>Manage Courses </h3>  
            </aside>
    </div> 
    <div class="table-responsive"> 
    <table class="table table-striped table-bordered table-hover"> 
    <thead> 
    <tr> 
    <th scope="col"><b>course id</b></th> 
    <th scope="col"><b>Year of Start</b></th> 
    <th scope="col"><b>Course name</b></th> 
    <th scope="col"><b>Duration</b></th> 
    <th scope="col"><b>Fees</b></th> 
    <th scope="col"><b>Intake</b></th>
    <th scope="col"><b>Filled seats</b></th> 
    <th scope="col"><b>vacant seats</b></th> 
    <th scope="col"><b>course type</b></th>  
    <th scope="col"><b>Update</b></th>
    <th scope="col"><b>Delete</b></th>
    </tr> 
    </thead> 
    <tbody> 
     <tr> 
            <?php

            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo $row['c_id']?></td>
            <td><?php echo $row['year']?></td>
            <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['fees']?></td>
            <td><?php echo $row['intake']?></td>
            <td><?php echo $row['f_seats']?></td>
            <td><?php echo $row['v_seats']?></td>
            <td><?php echo $row['c_type']?></td>
            <td><a href ="updatecc.php?c_id=<?php echo $row['c_id']; ?>" class ="btn btn-primary">Update</a></td>
            <td><a href ="delete.php?c_id=<?php echo $row['c_id']; ?>" class ="btn btn-danger">Delete</a></td>
            </tr>


             <?php   
            }
           
            ?>
      
    </tbody> 
    </table> 
    </div> 
    </div> 
    </div>
    </body>
   </html>