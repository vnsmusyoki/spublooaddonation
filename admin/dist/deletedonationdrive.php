<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `donation_drive` WHERE `donation_drive_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: managedonationdrives.php');
        }