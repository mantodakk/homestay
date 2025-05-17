<?php


function tempah_baharu()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];
    
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

 

        include 'views/system/tempah/baharu.php';

}

