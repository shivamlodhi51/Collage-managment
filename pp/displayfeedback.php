<?php
require_once('connection.php');
$query = "select * from feedback";
 $result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
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
    <div itemprop="articleBody">
    <div><div class="row align-items-center"> 
    <div class="col-lg-12"> 
    <div class="left_head"> 
        <aside style="font-size:1.5em;border-top:7px solid rgb(238, 140, 29);padding:20px;">

            <h3>Feedback details </h3>  
            </aside>
    </div> 
    <div class="table-responsive"> 








    <table class="table table-striped table-bordered table-hover"> 
    <thead> 
    <tr> 
    <th scope="col">app_id</th> 
    <th scope="col">Description</th> 
    <th scope="col">Date_&_time</th> 
    </tr> 
    </thead> 
    <tbody> 
     <tr> 
     <?php

while($row = mysqli_fetch_assoc($result))
{
?>
            <td><?php echo $row['app_id']?></td>
            <td><?php echo $row['desc']?></td>
            <td><?php echo $row['time']?></td>
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