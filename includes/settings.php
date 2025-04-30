<?php


$is_local = ($_SERVER['HTTP_HOST'] === 'localhost');

// Set the correct base path
$basePath = $is_local ? 'homestay' : ''; // Local subfolder, empty for production
$basePath2 = $is_local ? '/homestay' : ''; // Local subfolder with slash, empty for production
 
$rootPath = $is_local ? '/homestay' : '' ;
$testPath ='http://localhost/homestay'; 
date_default_timezone_set('Asia/Kuala_Lumpur');
