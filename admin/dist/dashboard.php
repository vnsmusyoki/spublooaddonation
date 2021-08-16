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
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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
                        <a class="nav-link" href="reports.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Print Reports
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Alerts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="allalerts.php">All Alerts</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Blood Groups
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewbloodgroup.php">Add new Blood Group</a>
                                <a class="nav-link" href="managebloodgroups.php">Manage Blood Groups</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Donation Drives
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewdonationdrive.php">Add new </a>
                                <a class="nav-link" href="managedonationdrives.php">Manage Donation Drives</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Donors
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewdonor.php">Add new Donor</a>
                                <a class="nav-link" href="managedonors.php">Manage Donors </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Insitutions
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="addnewinstitution.php">Add new Institution</a>
                                <a class="nav-link" href="manageinstitutions.php">Manage Institutions </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Staff
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
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
                <div class="container-fluid" style="padding-top: 3rem;">
                    <center>
                        <h3>ALL ALERTS</h3>
                    </center>
                    <table class="table table-bordered" id="allalerts">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Alert Name</th>
                                <th scope="col"> Donor </th>
                                <th scope="col">Description</th>
                                <th scope="col">Donation Drive Name</th>
                                <th scope="col">Date created</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `alert`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['alert_id'];
                                $names = $fetch['alert_name'];
                                $desc = $fetch['alert_desc'];
                                $donor = $fetch['alert_donor_id'];
                                $donation = $fetch['alert_donation_drive_id'];
                                $dates = $fetch['alert_date'];

                                echo "
                <tr>
                    <td>$record</td> 
                    <td>$names</td>
                    <td>$donor</td>
                    <td>$desc</td>
                    <td>$donation</td>
                    <td>$dates</td>  
                    <td><a href='deletealert.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                </tr>
            ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <center>
                        <h3>ALL BLOOD GROUP NAMES</h3>
                    </center>
                    <h3></h3>
                    <table class="table table-bordered" id="allgroups">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Group name</th>
                                <th scope="col">Group Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `blood_group`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['blood_group_id'];
                                $name = $fetch['blood_group_name'];
                                $desc = $fetch['blood_group_desc'];

                                echo "
                <tr>
                    <td>$record</td> 
                    <td>$name</td>
                    <td>$desc</td>
                    <td><a href='editbloodgroup.php?id=$record' class='btn btn-primary btn-block'>edit</td>
                    <td><a href='deleteblooadgroup.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                </tr>
            ";
                            }
                            ?>
                        </tbody>
                    </table>

                    <br>
                    <hr>
                    <center>
                        <h3>ALL DONATION DRIVES</h3>
                    </center>
                    <table class="table table-bordered" id="allDONATIONS">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Donation name</th>
                                <th scope="col">Institution</th>
                                <th scope="col">Location</th>
                                <th scope="col">Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `donation_drive`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['donation_drive_id'];
                                $institution = $fetch['donation_institution_id'];
                                $date = $fetch['donation_drive_date'];
                                $name = $fetch['donation_drive_name'];
                                $location = $fetch['donation_drive_location'];
                                $desc = $fetch['donation_drive_desc'];

                                echo "
                <tr>
                    <td>$record</td> 
                    <td>$date</td>
                    <td>$name</td>
                    <td>$institution</td>
                    <td>$location</td>
                    <td>$desc</td>
                    <td><a href='editdonationdrive.php?id=$record' class='btn btn-primary btn-block'>edit</td>
                    <td><a href='deletedonationdrive.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                </tr>
            ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <center>
                        <h3>ALL REGISTERED DONORS</h3>
                    </center>
                    <table class="table table-bordered" id="alldonors">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full names</th>
                                <th scope="col"> Dob</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">ID Number</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">County</th>
                                <th scope="col">Blood Group</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `donor`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['donor_id'];
                                $names = $fetch['donor_name'];
                                $dob = $fetch['donor_dob'];
                                $gender = $fetch['donor_gender'];
                                $email = $fetch['donor_email'];
                                $phone = $fetch['donor_telephone_number'];
                                $idnumber = $fetch['donor_national_id'];
                                $county = $fetch['donor_county'];
                                $bloodgroup = $fetch['donor_blood_group_id'];

                                echo "
                                    <tr>
                                        <td>$record</td> 
                                        <td>$names</td>
                                        <td>$dob</td>
                                        <td>$gender</td>
                                        <td>$email</td>
                                        <td>$idnumber</td>
                                        <td>$phone</td>
                                        <td>$county</td>
                                        <td>$bloodgroup</td>
                                        <td><a href='editdonor.php?id=$record' class='btn btn-primary btn-block'>edit</td>
                                        <td><a href='deletedonor.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                                    </tr>
                                ";
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <center>
                        <h3>ALL INSTITUTIONS</h3>
                    </center>
                    <table class="table table-bordered" id="allinstitutions">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Institution Name</th>
                                <th scope="col">Institution Location</th>
                                <th scope="col">Insitution Description</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `institution`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['institution_id'];
                                $location = $fetch['institution_location'];
                                $name = $fetch['institution_name'];
                                $desc = $fetch['institution_desc'];

                                echo "
                                    <tr>
                                        <td>$record</td> 
                                        <td>$name</td>
                                        <td>$location</td>
                                        <td>$desc</td>
                                        <td><a href='editinstitution.php?id=$record' class='btn btn-primary btn-block'>edit</td>
                                        <td><a href='deleteinstitution.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                                    </tr>
                                ";
                            }
                            ?>
                        </tbody>
                    </table>

                    <br>
                    <hr>
                    <center>
                        <h3>ALL REGISTERED STAFF MEMBERS</h3>
                    </center>
                    <table class="table table-bordered" id="ALLSTAFF">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full names</th>
                                <th scope="col"> Dob</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">ID Number</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Institution</th>
                                <th scope="col">Roles Assigned</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include '../dbconnection.php';
                            $data = "SELECT * FROM `staff`";
                            $query = mysqli_query($conn, $data);
                            while ($fetch = mysqli_fetch_assoc($query)) {
                                $record = $fetch['staff_id'];
                                $names = $fetch['staff_name'];
                                $dob = $fetch['staff_dob'];
                                $gender = $fetch['staff_sex'];
                                $email = $fetch['staff_email'];
                                $phone = $fetch['staff_phone_number'];
                                $idnumber = $fetch['staff_national_id'];
                                $institution = $fetch['staff_ institution_id'];
                                $roles = $fetch['staff_role'];

                                echo "
                <tr>
                    <td>$record</td> 
                    <td>$names</td>
                    <td>$dob</td>
                    <td>$gender</td>
                    <td>$email</td>
                    <td>$idnumber</td>
                    <td>$phone</td>
                    <td>$institution</td>
                    <td>$roles</td>
                    <td><a href='editstaff.php?id=$record' class='btn btn-primary btn-block'>edit</td>
                    <td><a href='deletestaff.php?id=$record' class='btn btn-danger btn-block'>delete</td>
                </tr>
            ";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script>
    $(document).ready(function() {
        $('#allgroups').DataTable();
        $('#allDONATIONS').DataTable();
        $('#alldonors').DataTable();
        $('#allinstitutions').DataTable();
        $('#ALLSTAFF').DataTable();
        $('#allalerts').DataTable();
    });
    </script>
</body>

</html>