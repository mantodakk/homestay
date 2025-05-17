<?php
// Simple Router with Functions
session_start();

include('includes/server.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Remove basePath from the request URI if it exists
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
    $requestUri = trim($requestUri, '/');

}
















// Route Definitions
$routes = [
    '' => 'home',
    '/' => 'home',



    'dashboard' => 'dashboard',
    'login' => 'login',
    'register' => 'register',
    'logout' => 'logout',
    'profile' => 'profile',


    //userprofile
    'profile/update' => 'profile_update',


    //tempah

    'tempah/baharu' => 'tempah_baharu',
    'tempahan/calendar' => 'tempahan_calendar',
    'tempahan/notify_admin' => 'tempahan_notify_admin',
    'tempah/senarai' => 'tempah_senarai',
    'tempahan/senarai' => 'tempahan_senarai',


    //review

    'review/baharu' => 'review_baharu',
    'review/senarai' => 'review_senarai',


    //report
    'aduan/kerosakan/senarai' => 'report_kerosakan_list',
    'aduan/kerosakan/baharu' => 'report_kerosakan_baharu',


    //cuti
    'cuti/calendar' => 'cuti_calendar',
    'cuti/senarai' => 'cuti_senarai',

    //views
    'views/update' => 'views_update',
    'views/get' => 'views_get',
];


switch (true) {
    case isset($routes[$requestUri]):
        // Route exists, execute the corresponding function
        call_user_func($routes[$requestUri]);
        break;

    case strpos($requestUri, 'tempah/details/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[2]) && is_numeric($parts[2])) {
            $tempah_id = $parts[2]; // Extract booking ID
            tempah($tempah_id);
        } else {
            notFound($requestUri);
        }
        break;

    case strpos($requestUri, 'aduan/kerosakan/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[2]) && is_numeric($parts[2])) {
            $kerosakan_id = $parts[2]; // Extract booking ID
            kerosakan($kerosakan_id);
        } else {
            notFound($requestUri);
        }
        break;

    default:
        // If none of the above conditions match, call notFound()
        notFound($requestUri);
        break;
}

?>