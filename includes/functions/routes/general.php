<?php


function home()
{
    include('includes/server.php');
    include 'views/public/home.php';
}


function login()
{
    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/auth/login.php';
}

function register()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/auth/register.php';
}




function logout()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    global $basePath2;

    header("Location: " . $basePath2 . "/login");
    exit();
}




function notFound($requestUri)
{
    http_response_code(404);
    // echo "404 Not Found\n";
    // echo $requestUri;
    include('includes/server.php');

    include 'views/system/auth/404.php';

}


function unAuth()
{
    http_response_code(401);
    echo "Unauthorized";
    // echo $requestUri;

}



function register_2()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register2.php';
}








function dashboard()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    include 'views/system/dashboard/dashboard_user.php';

}






function profile()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Profile', 'url' => '/profile'],
    ];
    echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    //     include 'views/system/admin/dashboard.php';

    // } elseif ($role == 'guide') {
    //     include 'views/system/guide/dashboard.php';

    // } else {
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    include 'views/system/user/profile.php';

}

function profile_update()
{
    include('includes/server.php');





    //     include 'views/system/admin/dashboard.php';

    // } elseif ($role == 'guide') {
    //     include 'views/system/guide/dashboard.php';

    // } else {
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    // header("Location: " . $basePath2 . "/profile");
    // exit();
}






function cuti_calendar()
{
    include('includes/server.php');
    // checkLogin();
    // $role = checkRole();

    // $breadcrumbs = [
    //     ['title' => 'Home', 'url' => ''],
    //     ['title' => 'Dashboard', 'url' => '/dashboard'],
    // ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";




}




function tempahan_calendar()
{
    include('includes/server.php');
    // checkLogin();
    // $role = checkRole();

    // $breadcrumbs = [
    //     ['title' => 'Home', 'url' => ''],
    //     ['title' => 'Dashboard', 'url' => '/dashboard'],
    // ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";




}

function tempahan_notify_admin()
{
    include('includes/server.php');
    // checkLogin();
    // $role = checkRole();

    // $breadcrumbs = [
    //     ['title' => 'Home', 'url' => ''],
    //     ['title' => 'Dashboard', 'url' => '/dashboard'],
    // ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";




}


function tempah($tempah_id)
{
    // Include the database connection
    include('includes/server.php');
    // $role = checkRole();

    // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $tempah_id = (int) $tempah_id;  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT *
    FROM bookings
 
    WHERE id = $tempah_id";

    // // Execute the query
    $result = $conn->query($sql);

    // // Check if any rows were returned (booking found)
    if ($result->num_rows > 0) {
        //     // Fetch the booking details (or any data you need)
        $tempah = $result->fetch_assoc();

    }



    $sql = "SELECT * FROM users WHERE role = '1'";

    // Execute the query
    $result = $conn->query($sql);
    
    // Check if any rows were returned (admins found)
    if ($result->num_rows > 0) {
        // Initialize an empty array to store all admins
        $admins = [];
    
        // Fetch all rows using a while loop
        while ($row = $result->fetch_assoc()) {
            $admins[] = $row;  // Add each row to the $admins array
        }
    
        // Optionally, you can print the $admins array to verify the data
        // print_r($admins);  // Uncomment to see the data
    
    }
    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],

        ['title' => 'Tempah', 'url' => '/staff'],
        ['title' => 'Details', 'url' => '/staff/details'],
        ['title' => "tempah_id", 'url' => "/tempah_id"],
    ];

    //     // Include the appropriate view for displaying the booking details

    //     $booking_status = getBookingStatuses($booking['status']);



    include 'views/system/tempah/details.php';

    // } else {
    //     notFound();
    // }
}

