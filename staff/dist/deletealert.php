<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `alert` WHERE `alert_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: dashboard.php');
        }