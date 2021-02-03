<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `donor` WHERE `donor_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: managedonors.php');
        }