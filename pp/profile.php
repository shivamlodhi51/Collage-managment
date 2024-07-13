<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM register WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madhav Institute Of Technology And Science </title>
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
                            <div class="sidebar-brand-text mx-3">Welcome <?php echo $row["firstname"]  ?></div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">
                            <!-- <i class="fa-sharp fa-solid fa-user"></i> -->
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            
                                <span>Profile</span></a>
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
                                    <a class="collapse-item " href="#">Course Details</a>
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
                                    <h6 class="collapse-header">Get Admission:</h6>
                                    <a class="collapse-item " href="admissionform.php">Admission Form</a>
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
                                    <h6 class="collapse-header">Give Feedback:</h6>
                                    <a class="collapse-item " href="feedback.php">Feedback Form</a>
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
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['firstname']; ?>
                                                <?php echo $row['lastname']; ?></span>
                                            <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
                                            <!-- <i class="fa-sharp fa-solid fa-user"></i> -->
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="profile.php">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Course
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Admission Form
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Feedback
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
                                    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                                </div><br>

                                <div class="row d-flex justify-content-center">
                                    <!-- form section start here -->
                                    <div class="form-main" id="stform">
                                        <div class="container">
                                            <div class="row-cols-1 blanks">
                                                <!-- <h2 class="h2">STUDENT ADMISSION FORM</h2> -->
                                                <form action="" method="post">
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationDefault01">First Name : <?php echo $row['firstname']; ?></label>
                                                            <!-- <input type="text" class="form-control" name="update_firstname" 
                                                                id="validationDefault01" value="<?php echo $row['firstname']; ?>"  required minlength="5" maxlength="10">-->
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationDefault02">Last Name : <?php echo $row['lastname']; ?></label>
                                                            <!-- <input type="text" class="form-control" name="update_lastname" 
                                                                id="validationDefault02" value="<?php echo $row['lastname']; ?>" required  minlength="5" maxlength="10">-->
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="email">Email : <?php echo $row['email']; ?></label>
                                                            <!-- <input type="text" class="form-control" id="email" value="<?php echo $row['email']; ?>" 
                                                                required  minlength="5" maxlength="35" name="update_email">-->
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="Phone">Phone Number : <?php echo $row['num']; ?></label>
                                                            <!-- <input type="text" class="form-control" id="phone" value="<?php echo $row['num']; ?>" 
                                                                required  minlength="10" maxlength="15" name="update_no">-->
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="dob">Date Of Birth : <?php echo $row['dob']; ?></label>
                                                            <!-- <input type="date" id="dob" required name="update_dob" value="<?php echo $row['dob']; ?>" name="update_dob"> -->
                                                            <!-- <input type="text" class="form-control" id="phone2" value=""
                                                                required minlength="10" maxlength="15"> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <!-- <label for="Subject">Subject</label>
                                                            <select class="custom-select" id="validationDefault04"
                                                                required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="MCA">MCA</option>
                                                                <option value="BCA">BCA</option>
                                                                <option value="BBA">BBA</option>
                                                                <option value="B.Tech">B.Tech</option>
                                                                <option value="MBA">MBA</option>
                                                                <option value="M.Tech">M.Tech</option>
                                                                <option value="BA">BA</option>
                                                                <option value="B.Com">B.Com</option>
                                                                <option value="M.Com">M.Com</option>
                                                            </select> -->
                                                            <label for="">Gender : <?php echo $row['gender']; ?></label>
                                                <!-- <select id="gender" required name="update_gender" value="">
                                                    <option value="">Please select</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Other</option>
                                                </select> -->
                                                        </div>
                                                        <!-- <div class="col-md-3 mb-3">
                                                            <label for="Branch">Branch</label>
                                                            <select class="custom-select" id="validationDefault04"
                                                                required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="CS">CS</option>
                                                                <option value="Civil">Civil</option>
                                                                <option value="Aerospace">Aerospace</option>
                                                                <option value="Agricultural">Agricultural</option>
                                                                <option value="Biomedical">Biomedical</option>
                                                                <option value="Chemical">Chemical</option>
                                                                <option value="Electronics">Electronics</option>
                                                                <option value="Mechanical">Mechanical</option>
                                                                <option value="Nuclear">Nuclear</option>
                                                            </select>
                                                        </div> -->
                                                        <!-- <div class="col-md-6 mb-3">
                                                            <label for="phone2">Address</label>
                                                            <input type="text" class="form-control" id="phone2" value=""
                                                                required minlength="10" maxlength="35">
                                                        </div> -->
                                                    <!-- </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationDefault03">City</label>
                                                            <input type="text" class="form-control"
                                                                id="validationDefault03" required>
                                                        </div> -->
                                                        <div class="col-md-3 mb-3">
                                                            <!-- <label for="validationDefault04">State</label>
                                                            <select class="custom-select" id="validationDefault04"
                                                                required>
                                                                <option selected disabled value="">Choose...</option>
                                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                <option value="Andaman and Nicobar Islands">Andaman and
                                                                    Nicobar
                                                                    Islands</option>
                                                                <option value="Arunachal Pradesh">Arunachal Pradesh
                                                                </option>
                                                                <option value="Assam">Assam</option>
                                                                <option value="Bihar">Bihar</option>
                                                                <option value="Chandigarh">Chandigarh</option>
                                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar
                                                                    Haveli
                                                                </option>
                                                                <option value="Daman and Diu">Daman and Diu</option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Lakshadweep">Lakshadweep</option>
                                                                <option value="Puducherry">Puducherry</option>
                                                                <option value="Goa">Goa</option>
                                                                <option value="Gujarat">Gujarat</option>
                                                                <option value="Haryana">Haryana</option>
                                                                <option value="Himachal Pradesh">Himachal Pradesh
                                                                </option>
                                                                <option value="Jammu and Kashmir">Jammu and Kashmir
                                                                </option>
                                                                <option value="Jharkhand">Jharkhand</option>
                                                                <option value="Karnataka">Karnataka</option>
                                                                <option value="Kerala">Kerala</option>
                                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                <option value="Maharashtra">Maharashtra</option>
                                                                <option value="Manipur">Manipur</option>
                                                                <option value="Meghalaya">Meghalaya</option>
                                                                <option value="Mizoram">Mizoram</option>
                                                                <option value="Nagaland">Nagaland</option>
                                                                <option value="Odisha">Odisha</option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Rajasthan">Rajasthan</option>
                                                                <option value="Sikkim">Sikkim</option>
                                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                                <option value="Telangana">Telangana</option>
                                                                <option value="Tripura">Tripura</option>
                                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                <option value="Uttarakhand">Uttarakhand</option>
                                                                <option value="West Bengal">West Bengal</option>
                                                            </select> -->
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <!-- <label for="validationDefault05">Pin code</label>
                                                            <input type="text" class="form-control"
                                                                id="validationDefault05" required> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            
                                                        </div>
                                                    </div>
                                                    <a class="btn btn-primary" type="" name="updateprofile"  href="updateprofile.php">Edit Profile</a>
                                                </form>
                                            </div>
                                        </div>
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