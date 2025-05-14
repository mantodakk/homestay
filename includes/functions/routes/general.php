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

    if ($role == 'admin') {
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
    // checkLogin();
    // $role = checkRole();

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
        ['title' => "$tempah_id", 'url' => "/tempah_id"],
    ];

    //     // Include the appropriate view for displaying the booking details

    //     $booking_status = getBookingStatuses($booking['status']);



    include 'views/system/tempah/details.php';

    // } else {
    //     notFound();
    // }
}







if (isset($_POST['senarai_permohonan_list'])) {


    $start = isset($_POST['start']) && $_POST['start'] >= 0 ? (int) $_POST['start'] : 0;
    $length = isset($_POST['length']) && $_POST['length'] > 0 ? (int) $_POST['length'] : 5;
    $role = isset($_POST['role']) ? $_POST['role'] : 5;
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : 0;
    $bengkel = isset($_POST['bengkel']) ? $_POST['bengkel'] : '';
    $search_value = isset($_POST['search']['value']) ? trim($_POST['search']['value']) : '';
    $draw = isset($_POST['draw']) ? (int) $_POST['draw'] : 1;


    $sql = "SELECT 
                p.id AS permohonan_id,
                MIN(pd.date) AS start_date,
                MAX(pd.date) AS end_date,
                p.status, p.user_id, p.permohonan_type, p.status, p.days, p.time_slip, p.file, p.place, p.purpose,
                p.lecturer_id, p.kb_id, 
                ud.name AS student_name, 
                ud.ndp, 
                ud.image AS student_image, 
                udlect.name AS lecturer_name, 
                udlect.bengkel
            FROM permohonan_dates pd
            LEFT JOIN permohonan p ON pd.permohonan_id = p.id
            LEFT JOIN user_details ud ON p.user_id = ud.user_id
            LEFT JOIN user_details udlect ON p.lecturer_id = udlect.user_id";

    $whereClause = "";

    if (!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
        $start_date = date('Y-m-d', strtotime($_POST['start_date']));
        $end_date = date('Y-m-d', strtotime($_POST['end_date']));
        $whereClause .= " WHERE (pd.date BETWEEN '$start_date' AND '$end_date')";
    }

    if (!empty($search_value)) {
        $search_value_escaped = $conn->real_escape_string($search_value);
        if (empty($whereClause)) {
            $whereClause .= " WHERE ";
        } else {
            $whereClause .= " AND ";
        }

        $whereClause .= "(
            ud.name LIKE '%$search_value_escaped%' OR 
            ud.ndp LIKE '%$search_value_escaped%' OR 
            udlect.name LIKE '%$search_value_escaped%' OR 
            p.place LIKE '%$search_value_escaped%' OR 
            p.purpose LIKE '%$search_value_escaped%'
        )";


    }

    if ($role == "3") {
        if (empty($whereClause)) {
            $whereClause .= " WHERE ";
        } else {
            $whereClause .= " AND ";
        }
        $whereClause .= "p.lecturer_id = '$user_id'";


    }
    if ($role == "2") {
        if (empty($whereClause)) {
            $whereClause .= " WHERE ";
        } else {
            $whereClause .= " AND ";
        }
        $whereClause .= "udlect.bengkel = '$bengkel'";

    }

    if ($role == "5") {
        if (empty($whereClause)) {
            $whereClause .= " WHERE ";
        } else {
            $whereClause .= " AND ";
        }
        $whereClause .= "p.user_id = '$user_id'";


    }

    $sql .= $whereClause;
    $sql .= " GROUP BY p.id LIMIT $start, $length";

    $result = $conn->query($sql);

    // Count filtered records
    $count_filtered_sql = "SELECT COUNT(DISTINCT p.id) AS total 
                           FROM permohonan_dates pd
                           LEFT JOIN permohonan p ON pd.permohonan_id = p.id
                           LEFT JOIN user_details ud ON p.user_id = ud.user_id
                           LEFT JOIN user_details udlect ON p.lecturer_id = udlect.user_id";
    $count_filtered_sql .= $whereClause;

    $count_filtered_result = $conn->query($count_filtered_sql);
    $filtered_records = $count_filtered_result->fetch_assoc()['total'];

    // Count total records (without any filter)
    $count_total_sql = "SELECT COUNT(DISTINCT p.id) AS total 
                        FROM permohonan_dates pd
                        LEFT JOIN permohonan p ON pd.permohonan_id = p.id";
    $count_total_result = $conn->query($count_total_sql);
    $total_records = $count_total_result->fetch_assoc()['total'];

    // Prepare data array
    $event_groups = [];

    while ($row = $result->fetch_assoc()) {
        if (!empty($row['file'])) {
            $file_extension = strtolower(pathinfo($row['file'], PATHINFO_EXTENSION));
            switch ($file_extension) {
                case 'pdf':
                    $file_type = 'iframe';
                    break;
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'gif':
                    $file_type = 'image';
                    break;
                default:
                    $file_type = 'unknown';
                    break;
            }
        } else {
            $file_type = null;
        }

        $event_data = [
            'permohonan_id' => $row['permohonan_id'],
            'student_name' => $row['student_name'],
            'lecturer_name' => $row['lecturer_name'],
            'place' => $row['place'],
            'purpose' => $row['purpose'],
            'start' => $row['start_date'],
            'end' => $row['end_date'],
            'status' => $row['status'],
            'bengkel' => $row['bengkel'],
            'ndp' => $row['ndp'],
            'file' => $file_type ? $rootPath . "/assets/uploads/permohonan/" . $row['permohonan_id'] . "/" . $row['file'] : null,
            'file_ext' => $file_type,
        ];

        if (!empty($event_data['permohonan_id'])) {
            $event_groups[] = $event_data;
        }
    }

    // JSON response
    $response = [
        'draw' => $draw,
        'recordsTotal' => (int) $total_records,
        'recordsFiltered' => (int) $filtered_records,
        'data' => $event_groups
    ];

    echo json_encode($response);
    exit;
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
