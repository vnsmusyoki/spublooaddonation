<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `blood_group` WHERE `blood_group_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: managebloodgroups.php');
        }