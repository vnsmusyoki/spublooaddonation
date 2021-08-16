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
        <a class="navbar-brand" href="dashboard.php">Staff Dashboard</a>
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
           <?php include_once 'sidebar.php'; ?>
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