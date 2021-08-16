<?php

session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Admin | Blood DOnation</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed" style="background-color:#ced4da;">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Alerts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="allalerts.php">All Alerts</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Blood Groups
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewbloodgroup.php">Add new Blood Group</a>
                                <a class="nav-link" href="managebloodgroups.php">Manage Blood Groups</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Donation Drives
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewdonationdrive.php">Add new </a>
                                <a class="nav-link" href="managedonationdrives.php">Manage Donation Drives</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Donors
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewdonor.php">Add new Donor</a>
                                <a class="nav-link" href="managedonors.php">Manage Donors </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Insitutions
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewinstitution.php">Add new Institution</a>
                                <a class="nav-link" href="manageinstitutions.php">Manage Institutions </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Staff
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewstaff.php">Add new Staff</a>
                                <a class="nav-link" href="managestaff.php">Manage Staff Members </a>
                            </nav>
                        </div>



                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10 py-4">
                            <form style="background-color:white;padding:2rem 1rem;margin-top:5rem;" method="POST" action="">
                                <center>
                                    <h4>Add new staff</h4>
                                </center>
                                <hr>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Full Names</label>
                                    <input class="form-control py-4" type="text" name="fullnames" />
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">ID Number</label>
                                            <input class="form-control py-4" type="number" name="idnumber" min="10000000"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Phone Number</label>
                                            <input class="form-control py-4" type="number" name="phone" min="0700000001" max="0799999999" />
                                        </div>
                                    </div>
                                     
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Date of Birth</label>
                                            <input class="form-control py-4" type="date" name="dates" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Institution</label>
                                            <select name="institution" id="" class="form-control py-4">
                                                <option value="">select</option>
                                                <?php
                                                include '../dbconnection.php';
                                                $data = "SELECT * FROM `institution`";
                                                $query = mysqli_query($conn, $data);
                                                while ($fetch = mysqli_fetch_assoc($query)) {
                                                    $name = $fetch['institution_name'];
                                                    echo "<option value='$name'> $name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Phone Number</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" />
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Gender</label>
                                            <select name="gender" class="form-control py-4">
                                            <option value="">select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                   
                                     
                                </div> 
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputFirstName">Duties assigned</label>
                                            <textarea name="rolseassigned" id="" cols="30" rows="10" class="form-control py-4"></textarea>
                                        </div> 
                                <button type="submit" class="btn btn-primary btn-block" name="uploadgroup">Create Staff Account</button>
                                <?php
                                if (isset($_POST['uploadgroup'])) {
                                    include '../dbconnection.php';
                                    $fullnames = mysqli_real_escape_string($conn, $_POST['fullnames']);
                                    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                                    $idnumber = mysqli_real_escape_string($conn, $_POST['idnumber']);
                                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                                    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                                    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
                                    $dates = mysqli_real_escape_string($conn, $_POST['dates']);
                                    $duties = mysqli_real_escape_string($conn, $_POST['rolseassigned']);
                                    $idlength = strlen($idnumber);
                                    $phonelength = strlen($idnumber);
                                    if (empty($dates) || empty($duties) || empty($institution) || empty($gender) || empty($email) || empty($idnumber) || empty($fullnames) || empty($phone)) {
                                        echo "<script>alert('provide required details');</script>";
                                    } else if (!preg_match("/^[a-zA-z ]*$/", $fullnames)) {
                                        echo "<script>alert('provide required   details using letters only');</script>";
                                    }else {
  
                                        
                                        $insert = "INSERT INTO `staff`(`staff_name`, `staff_national_id`, `staff_sex`, `staff_dob`, `staff_phone_number`, `staff_email`, `staff_role`, `staff_ institution_id`) VALUES ('$fullnames', '$idnumber', '$gender', '$dates', '$phone', '$email', '$duties', '$institution')";
                                        $querys = mysqli_query($conn, $insert);
                                        if ($querys) {
                                            $staff = "SELECT * FROM `staff` WHERE `staff_name`='$fullnames' AND `staff_national_id`='$idnumber' AND `staff_phone_number`='$phone'";
                                            $checkstaff = mysqli_query($conn, $staff);
                                            while($fetch= mysqli_fetch_assoc($checkstaff)){
                                                $staffid = $fetch['staff_id'];
                                                $password = md5($idnumber);
                                               $addlogin = "INSERT INTO `login`(`login_user_name`, `login_password`, `login_admin_id`, `login_donor_id`, `login_staff_id`) VALUES ('$email', '$password', '000', '000', '$staffid')";
                                                $checklogin =  mysqli_query($conn, $addlogin);

                                                if($checklogin){
                                                    echo "<script>window.location.href='managestaff.php';</script>";
                                                }
                                            }
                                            
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>