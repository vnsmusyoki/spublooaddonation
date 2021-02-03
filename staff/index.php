<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Staff Login</title>
        <link href="dist/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">STAFF LOGIN</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="username" placeholder="Enter Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                 
                                                <button type="submit" name="adminlogin" class="btn btn-primary">Login</button>
                                            </div>
                                         <?php
                                                if(isset($_POST['adminlogin'])){
                                                    include 'dbconnection.php';
                                                    $username = mysqli_real_escape_string($conn, $_POST['username']);
                                                    $password = mysqli_real_escape_string($conn, $_POST['password']);

                                                    if(empty($username) || empty($password)){
                                                        echo "<script>alert('provide required details');</script>";
                                                    }else {
                                                        
                                                        $newpassword = md5($password);
                                                    $check = "SELECT *  FROM `login` WHERE `login_user_name` = '$username'";
                                                        $query = mysqli_query($conn, $check);
                                                        $rows = mysqli_num_rows($query);
                                                        if($rows >=1){
                                                            while($fetch = mysqli_fetch_assoc($query)){
                                                                $dbpassword = $fetch['login_password'];
                                                                $rank = $fetch['login_staff_id'];
                                                                if($rank >1){
                                                                if($newpassword == $dbpassword){
                                                                    $_SESSION['admin'] = $username;
                                                                    header('Location: dist/dashboard.php');
                                                                }else{
                                                                    echo "<script>alert('Please check your details');</script>";
                                                                }}else{
                                                                    echo "<script>alert('Only staff members have access to this page');</script>";
                                                                }
                                                            }
                                                        }else{
                                                            echo "<script>alert('Details not found');</script>";
                                                        }
                                                    }
                                                }
                                                ?>
                                        </form>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="dist/js/scripts.js"></script>
    </body>
</html>
