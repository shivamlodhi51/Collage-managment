<?php
require 'connection.php';
$query = "select * from orders order by c_id";
 $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin </title>
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link
       href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
       rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/bb1a74625a.js" crossorigin="anonymous"></script>

</head>
<body>
   
    <!-- Page Wrapper -->

                <div id="wrapper">

                    <!-- Sidebar -->
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">Admin</div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="admindash.php">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Interface
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Components</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Custom Components:</h6>
                                    <a class="collapse-item active" href="buttons.html">Addmission Form</a>
                                    <a class="collapse-item " href="cards.html">Addmission Details</a>
                                </div>
                            </div>
                        </li> -->

                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Courses</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Courses:</h6>
                                    <a class="collapse-item " href="addcourse.php">Add Course</a>
                                    <a class="collapse-item " href="manage_course.php">Manage Course</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Students</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Student:</h6>
                                    <a class="collapse-item " href="disstudent.php">Manage Student</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Application</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Admission Form:</h6>
                                    <a class="collapse-item " href="disapplication.php">Manage Application</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Feedback</span>
                            </a>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Feedback:</h6>
                                    <a class="collapse-item " href="displayfeedback.php">View Feedback</a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
                    <!-- End of Sidebar -->

                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            <!-- Topbar -->
                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                <!-- Sidebar Toggle (Topbar) -->
                                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                    <i class="fa fa-bars"></i>
                                </button>



                                <!-- Topbar Navbar -->
                                <ul class="navbar-nav ml-auto">


                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Alerts Center
                                        </h6>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-primary">
                                                    <i class="fas fa-file-alt text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500">December 12, 2019</div>
                                                <span class="font-weight-bold">A new monthly report is ready to
                                                    download!</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-success">
                                                    <i class="fas fa-donate text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500">December 7, 2019</div>
                                                $290.29 has been deposited into your account!
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-warning">
                                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500">December 2, 2019</div>
                                                Spending Alert: We've noticed unusually high spending for your account.
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                    </li>


                                    <div class="topbar-divider d-none d-sm-block"></div>

                                    <!-- Nav Item - User Information -->
                                   <!-- Nav Item - User Information -->
                                   <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN
                                            </span>
                                            <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="admindash.php">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Dashboard
                                            </a>
                                            <a class="dropdown-item" href="manage_course.php">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Manage Courses
                                            </a>
                                            <a class="dropdown-item" href="disstudent.php">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                               Manage Students
                                            </a>
                                            <a class="dropdown-item" href="disapplication.php">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                               Manage Applications
                                            </a>
                                            <a class="dropdown-item" href="displayfeedback.php">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                               View Feedbacks
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>

                                </ul>

                            </nav>
                            <!-- End of Topbar -->
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Courses </h1>
</div>

<div class="row d-flex justify-content-center">
    <!-- form section start here -->
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
    <!-- form section start here -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current
    session.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="logout.php">Logout</a>
</div>
</div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>