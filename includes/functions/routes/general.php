<?php


function home()
{
    include('includes/server.php');


    $title = "Villa D'hati - Modern Family Homestay in Malaysia";
    $description = "Spacious, fully-equipped homestay with swimming pool and parking. Perfect for families seeking comfort and relaxation.";
    $keywords = "Malaysia homestay, family homestay, homestay with pool, modern homestay, vacation rental";
    $url = "$rootPath"; // Use full canonical URL
    $image = $rootPath . "/assets/img/homestay/IMG-20250422-WA0029.jpg"; // Social preview image (recommended 1200x630)
    $site_name = "Villa D'hati";
    $type = "website"; // Usually "website", could be "article", "product", etc.




    $query = "SELECT setting_key, setting_value FROM web_settings";
    $result = $conn->query($query);
    $settings = [];

    // Fetch settings into an associative array
    while ($row = $result->fetch_assoc()) {
        $settings[$row['setting_key']] = $row['setting_value'];
    }

    // Fetch the original price (fallback) and the discounted price (if available)
    $originalPrice = isset($settings['price_per_night']) ? floatval($settings['price_per_night']) : 0;
    $discountedPrice = isset($settings['discount_price_per_night']) ? floatval($settings['discount_price_per_night']) : 0;

    // Determine which price to use
    $priceToUse = ($discountedPrice > 0) ? $discountedPrice : $originalPrice;




    $query = "SELECT * FROM reviews WHERE status = 1";
    $result = $conn->query($query);
    $reviews = [];

    // Fetch settings into an associative array
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }





    include 'views/public/home.php';
}


function login()
{
    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";




    $title = "Villa D'hati - Modern Family Homestay in Malaysia";
    $description = "Spacious, fully-equipped homestay with swimming pool and parking. Perfect for families seeking comfort and relaxation.";
    $keywords = "Malaysia homestay, family homestay, homestay with pool, modern homestay, vacation rental";
    $url = "$rootPath"; // Use full canonical URL
    $image = $rootPath . "/assets/img/homestay/IMG-20250422-WA0029.jpg"; // Social preview image (recommended 1200x630)
    $site_name = "Villa D'hati";
    $type = "website"; // Usually "website", could be "article", "product", etc.
    redirectIfLoggedIn('/dashboard'); // or '/dashboard'

    include 'views/public/auth/login.php';
}

function register()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";


    $title = "Villa D'hati - Modern Family Homestay in Malaysia";
    $description = "Spacious, fully-equipped homestay with swimming pool and parking. Perfect for families seeking comfort and relaxation.";
    $keywords = "Malaysia homestay, family homestay, homestay with pool, modern homestay, vacation rental";
    $url = "$rootPath"; // Use full canonical URL
    $image = $rootPath . "/assets/img/homestay/IMG-20250422-WA0029.jpg"; // Social preview image (recommended 1200x630)
    $site_name = "Villa D'hati";
    $type = "website"; // Usually "website", could be "article", "product", etc.
    redirectIfLoggedIn('/dashboard'); // or '/dashboard'

    include 'views/public/auth/register.php';
}




function logout()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    $userId = $_SESSION['user_details']['id'] ?? null;

    if ($userId) {
        removeBeamsInterest((string) $userId);
    }
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

    include 'views/public/auth/404.php';

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

    if ($role == 'admin') {



        // Count total records (without any filter)
        $totaluser_sql = "SELECT COUNT(id) AS total 
                        FROM users
                       WHERE role != 1;";
        $totaluser_result = $conn->query($totaluser_sql);
        $total_users = $totaluser_result->fetch_assoc()['total'];

        $totalbook_sql = "SELECT COUNT(id) AS total 
                        FROM bookings
                       WHERE status > 1;";
        $totalbook_result = $conn->query($totalbook_sql);
        $total_book = $totalbook_result->fetch_assoc()['total'];

        $totaldmg_sql = "SELECT COUNT(id) AS total 
                        FROM damage
                       WHERE status > 1;";
        $totaldmg_result = $conn->query($totaldmg_sql);
        $total_dmg = $totaldmg_result->fetch_assoc()['total'];

        $totalrev_sql = "SELECT COALESCE(AVG(star), 0) AS average 
                 FROM reviews
                 WHERE status > 0;";

        $totalrev_result = $conn->query($totalrev_sql);
        $total_rev = $totalrev_result->fetch_assoc()['average'];

        // while ($row = $result->fetch_assoc()) {


        // }


        include 'views/system/dashboard/dashboard_admin.php';

    } else {
        include 'views/system/dashboard/dashboard_user.php';

    }


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
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



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



function tempahan_senarai()
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
function tempah_senarai()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    // $breadcrumbs = [
    //     ['title' => 'Home', 'url' => ''],
    //     ['title' => 'Dashboard', 'url' => '/dashboard'],
    // ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],

        ['title' => 'Tempah', 'url' => '/tempah'],
        ['title' => 'Senarai', 'url' => '/tempah/senarai'],
    ];


    include 'views/system/tempah/senarai.php';


}
function tempah($tempah_id)
{
    // Include the database connection
    include('includes/server.php');
    checkLogin();

    $role = checkRole();

    // Escape the $tempah_id to prevent SQL injection (if it's not already an integer)
    $tempah_id = (int) $tempah_id;  // Cast to integer to ensure safety

    // Query to fetch the main booking details (from bookings table)
    $sql_booking = "SELECT * FROM bookings WHERE id = $tempah_id";

    // Execute the query
    $result_booking = $conn->query($sql_booking);

    // Check if any booking was found
    if ($result_booking->num_rows > 0) {
        // Fetch the main booking details
        $tempah = $result_booking->fetch_assoc();
    } else {
        // Handle the case if no booking was found (optional)
        // notFound();
    }

    // Query to fetch all booking details (from booking_details table)
    $sql_details = "SELECT * FROM booking_details WHERE booking_id = $tempah_id";

    // Execute the query
    $result_details = $conn->query($sql_details);

    // Initialize an array to store the booking details
    $tempah_details = [];

    // Check if any booking details were returned
    if ($result_details->num_rows > 0) {
        // Fetch all rows and store them in the array
        while ($row = $result_details->fetch_assoc()) {
            $tempah_details[] = $row;  // Store each booking detail
        }
    }


    $statusbooking = getStatusLabelAndButtonClass($tempah['status']);


    // Query to get all admin users (role = 1)
    $sql_admins = "SELECT u.email, u.role  , ud.*
    FROM users u
    LEFT JOIN user_details ud ON u.id = ud.user_id
    WHERE u.role = '1';
        ";
    // Execute the query
    $result_admins = $conn->query($sql_admins);

    // Initialize an empty array to store all admins
    $admins = [];
    if ($result_admins->num_rows > 0) {
        // Fetch all rows using a while loop
        while ($row = $result_admins->fetch_assoc()) {
            $admins[] = $row;  // Add each row to the $admins array
        }
    }

    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Tempah', 'url' => '/staff'],
        ['title' => 'Details', 'url' => '/staff/details'],
        ['title' => "$tempah_id", 'url' => "/tempah_id"],
    ];

    // Include the appropriate view for displaying the booking details
    include 'views/system/tempah/details.php';
}





function review_baharu()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Profile', 'url' => '/profile'],
    ];
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    //     include 'views/system/admin/dashboard.php';

    // } elseif ($role == 'guide') {
    //     include 'views/system/guide/dashboard.php';

    // } else {
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    include 'views/system/review/baharu.php';

}

function review_senarai()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Profile', 'url' => '/profile'],
    ];
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    //     include 'views/system/admin/dashboard.php';

    // } elseif ($role == 'guide') {
    //     include 'views/system/guide/dashboard.php';

    // } else {
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    if ($role == 'admin') {

        include 'views/system/review/senarai_admin.php';
    } else {
        include 'views/system/review/senarai_user.php';

    }
}





function views_update()
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

function views_get()
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



function redirectIfLoggedIn(string $redirectTo = '/')
{
    global $basePath2;

    if (isset($_SESSION['user_details'])) {
        header("Location: " . $basePath2 . $redirectTo);
        exit();
    }
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


function set_active_class($path)
{
    global $requestUri; // Access global $requestUri inside the function

    // Check if the current path starts with the given path
    if (strpos($requestUri, $path) === 0) { // 0 means it starts with the given path
        return 'active bg-gradient-dark text-white'; // Active classes
    }
    return 'text-dark'; // Default classes
}

function getStatusLabelAndButtonClass($statusCode)
{
    // Initialize variables
    $statusLabel = '';
    $btnClass = '';

    // Switch based on status code
    switch ($statusCode) {
        case '0':
        case 0:
            $statusLabel = 'Rejected';
            $btnClass = 'btn btn-danger';
            break;
        case '1':
        case 1:
            $statusLabel = 'Pending';
            $btnClass = 'btn btn-warning';
            break;
        case '2':
        case 2:
            $statusLabel = 'Approved';
            $btnClass = 'btn btn-success';
            break;
        default:
            $statusLabel = 'Unknown';
            $btnClass = 'btn btn-secondary btn-sm';
    }

    // Return the status label and button class as an array
    return ['statusLabel' => $statusLabel, 'btnClass' => $btnClass];
}
