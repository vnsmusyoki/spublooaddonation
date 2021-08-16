<?php 

$route = $_GET['id'];
include '../dbconnection.php';
$data = "DELETE  FROM `institution` WHERE `institution_id` = '$route'";
        $query = mysqli_query($conn, $data);
        if($query){
            header('Location: manageinstitutions.php');
        }