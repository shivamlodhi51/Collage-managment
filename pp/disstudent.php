<?php
require_once('connection.php');
$query = "select * from student";
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

            <h3>Student Details </h3>  
            </aside>
    </div> 
    <div class="table-responsive"> 
    <table class="table table-striped table-bordered table-hover"> 
    <thead> 
    <tr> 
    <th scope="col">app_id</th> 
    <th scope="col">first name</th> 
    <th scope="col">last name</th> 
    <th scope="col">father`s name</th> 
    <th scope="col">dob</th>
    <th scope="col">gender</th>  
    <th scope="col">email</th> 
    <th scope="col">contact no</th> 
    <th scope="col">category</th>
    <th scope="col">course name</th> 
    <th scope="col">course id</th> 
    <th scope="col">address</th>
    <th scope="col">Update</th>
    
    </tr> 
    </thead> 
    <tbody> 
     <tr> 
            <?php

            while($row = mysqli_fetch_assoc($result))
            {
            ?>
             <td><?php echo $row['app_id']?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['num']?></td>
            <td><?php echo $row['category']?></td>
             <td><?php echo $row['c_name']?></td>
            <td><?php echo $row['c_id']?></td>
            <td><?php echo $row['address']?></td>
            <td><a href ="updates.php?app_id=<?php echo $row['app_id']; ?>" class ="btn btn-primary">Update</a></td>
            
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
