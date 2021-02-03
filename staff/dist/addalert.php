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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="dashboard.php">Staff Dashboard</a>
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
                                <a class="nav-link" href="addalert.php">Add Alert</a>
                                <a class="nav-link" href="allalerts.php">All Alerts</a>
                            </nav>
                        </div>





                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid" style="padding-top: 3rem;">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1"></div>
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10 py-4">
                            <form style="background-color:white;padding:2rem 1rem;margin-top:5rem;" method="POST" action="">
                                <center>
                                    <h4>Add new Alert</h4>
                                </center>
                                <hr>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Alert Name</label>
                                    <input class="form-control py-4" type="text" name="alert" />
                                </div>
 
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Donor Names</label>
                                    <select name="donor" id="" class="form-control py-4">
                                        <option value="">select</option>
                                        <?php
                                        include '../dbconnection.php';
                                        $data = "SELECT * FROM `donor`";
                                        $query = mysqli_query($conn, $data);
                                        while ($fetch = mysqli_fetch_assoc($query)) {
                                            $name = $fetch['donor_name'];
                                            echo "<option value='$name'> $name</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
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
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Donation Description</label>

                                    <textarea name="description" id="" class="form-control py-4" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="uploadgroup">Upload Donation Data</button>
                                <?php
                                if (isset($_POST['uploadgroup'])) {
                                    include '../dbconnection.php';
                                    $alert = mysqli_real_escape_string($conn, $_POST['alert']);
                                    $donor = mysqli_real_escape_string($conn, $_POST['donor']);
                                    $description = mysqli_real_escape_string($conn, $_POST['description']);
                                    $institution = mysqli_real_escape_string($conn, $_POST['institution']); 
                                    if (empty($institution) || empty($description) || empty($donor) || empty($alert)) {
                                        echo "<script>alert('provide required details');</script>";
                                    } else if (!preg_match("/^[a-zA-z ]*$/", $alert)) {
                                        echo "<script>alert('provide required   details using letters only');</script>";
                                    } else {

                                        $insert = "INSERT INTO `alert`(`alert_name`, `alert_desc`,  `alert_donor_id`,  `alert_donation_drive_id`) VALUES ('$alert', '$description', '$donor', '$institution') ";
                                        $querys = mysqli_query($conn, $insert);
                                        if ($querys) {
                                            echo "<script>window.location.href='dashboard.php';</script>";
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