<?php
require 'connection.php';

 
  
  $result2 = mysqli_query($conn, "SELECT * FROM course where c_type='phd' ");
//   $row2 = mysqli_fetch_assoc($result2);
  



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
    <!-- Header Section Start Here -->
    <div class="head">
        <div class="container">

            <div class="head_main">

                <nav class="navbar navbar-expand-lg navbar-light p-0 m-0">
                    <a class="navbar-brand  logo border-dark header_logo" href="index.html">
                        <img class="img-fluid " width="90px" src="images/mits-logo.png" alt=""> MITS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item margin_right">
                                <a class="nav-link active_line my_nav" href="index.html">HOME <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item margin_right">
                                <a class="nav-link my_nav" href="about.html">ABOUT</a>
                            </li>
                            <li class="nav-item margin_right">
                                <a class="nav-link my_nav" href="contact.html">CONTACT US</a>
                            </li>

                            <li class="nav-item dropdown margin_right">
                                <a class="nav-link my_nav dropdown-toggle" href="ug.html" role="button" data-toggle="dropdown"
                                    aria-expanded="false">
                                    COURSES
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="ug.html">Under Graduate</a>
                                    <a class="dropdown-item" href="pg.html">Post Graduate</a>
                                    <a class="dropdown-item" href="phd.html">Ph.D</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="fee.html">Fee Structure</a>
                                    
                                </div>
                            </li>
                            <!-- <li class="nav-item margin_right">
                                <a class="nav-link my_nav" href="#contact_us">Contact Us</a>
                            </li> -->
                        </ul>
                        <div class="log_btn margin_right">
                            <a href="login.html">Login</a>
                            <a  href="register-form.html">Register</a>
                            <!-- <a href="register-form.html">Register</a> -->
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header Section End Here -->
    <section id="sp-section-6">

        <div class="container">
<div class="container-inner">


<div class="row">
<div id="sp-breadcrumbs" class="col-lg-12 "><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<ol itemscope="" itemtype="https://schema.org/BreadcrumbList" class="breadcrumb">
<li class="float-start">
<span class="divider fas fa-map-marker-alt" aria-hidden="true"></span>
</li>

<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="breadcrumb-item"><span itemprop="name">Courses</span>				<meta itemprop="position" content="1">
</li>
    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="breadcrumb-item active"><span itemprop="name">Ph.D</span>				<meta itemprop="position" content="2">
</li>
</ol>
</div></div></div></div></div>
            </div>
</div>

</section>

<!-- table section start here -->

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
        <h3>Ph.D Courses </h3>  
        </aside>
</div> 
<div class="table-responsive"> 
<table class="table table-striped table-bordered table-hover"> 
<thead> 
<tr> 
<th scope="col">Year of Start</th> 
<th scope="col">Name of Program</th> 
<th scope="col">Intake</th>
<th scope="col">Duration</th> 
</tr> 
</thead> 
<tbody> 
                             <tr> 
                                
                             <?php

                            while($row2 = mysqli_fetch_assoc($result2))
                            {
                            ?>
                           
                            <td><?php echo $row2['year']?></td>
                            <td><?php echo $row2['c_name']?></td>
                            <td><?php echo $row2['intake']?></td>
                            <td><?php echo $row2['duration']?> Years</td>
                            
                            
                            </tr>
                            
                            
                             <?php   
                            }
                            
                            ?>
                            
                            </tbody>  
</table> 
</div> 
</div> 
</div>

<!-- table section end here -->
<aside style="font-size:1.5em;border-top:7px solid rgb(238, 140, 29);padding:20px;"></aside>
<!-- footer section start here -->
<div class="footer_main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 footer_col_main">
                <div class="footer_col">
                    <div class="footer_logo">
                        <a href="#">
                            <h3>MITS</h3>
                        </a>
                        <p>Gole Ka Mandir <br>
                            Gwalior<br>India
                            <br>
                            <br>
                            <strong>Phone:</strong>7987290643 <br>
                            <strong>Email:</strong>lodhishivam51@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer_col_main">
                <div class="footer_col">
                    <h6>Useful Links</h6>
                    <ul class="m-0 p-0">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer_col_main">
                <div class="footer_col">
                    <h6>Our Services</h6>
                    <ul class="m-0 p-0">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 footer_col_main">
                <div class="footer_col">
                    <h6>Our Social Networks</h6>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna
                    </p>
                    <div class="footer_media mt-4">
                        <div class="footer_icon">
                            <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer_icon">
                            <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer_icon">
                            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer_icon">
                            <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="footer_icon">
                            <a href="#"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>