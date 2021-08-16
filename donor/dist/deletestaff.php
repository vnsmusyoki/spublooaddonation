<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `staff` WHERE `staff_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: managestaff.php');
        }