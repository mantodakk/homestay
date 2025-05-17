<?php






function cuti_senarai()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    include 'views/system/cuti/senarai.php';

}






function report_kerosakan_list()
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

    include 'views/system/report/kerosakan/senarai.php';

}

function report_kerosakan_baharu()
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

    include 'views/system/report/kerosakan/baharu.php';

}




function kerosakan($kerosakan_id)
{
    // Include the database connection
    include('includes/server.php');
    checkLogin();

    $role = checkRole();

    // Escape the $kerosakan_id to prevent SQL injection (if it's not already an integer)
    $kerosakan_id = (int) $kerosakan_id;  // Cast to integer to ensure safety

    // Query to join damage, damage_attachments, and damage_log tables
    // SQL query to fetch damage data, attachments, and logs
    $sql = "SELECT damage.*, 
               damage_attachments.file AS attachment_file, 
               damage_log.action, damage_log.created_at as timestamp
        FROM damage
        LEFT JOIN damage_attachments ON damage.id = damage_attachments.damage_id
        LEFT JOIN damage_log ON damage.id = damage_log.damage_id
        WHERE damage.id = $kerosakan_id";

    // Execute the query
    $result = $conn->query($sql);

    // Initialize arrays to hold multiple attachments and logs
    $attachments = [];
    $logs = [];

    // Check if the query returns any rows
    if ($result->num_rows > 0) {
        // Fetch data from the result set
        while ($row = $result->fetch_assoc()) {
            // Handle attachments (can be multiple per damage report)
            if (!empty($row['attachment_file'])) {
                // Add each attachment to the attachments array
                $attachments[] = $row['attachment_file'];
            }

            // Handle logs (can be multiple per damage report)
            if (!empty($row['action']) && !empty($row['timestamp'])) {
                // Add each log entry to the logs array
                $logs[] = [
                    'action' => $row['action'],
                    'timestamp' => $row['timestamp']
                ];
            }

            // You can also store the basic damage info in a variable
            $damage_info = [
                'id' => $row['id'],
                'description' => $row['description'],
                'status' => $row['status'],
                'created_at' => $row['created_at'],
                'cost' => $row['cost'],
                'priority' => $row['priority'],
            ];
        }


        // Now $attachments and $logs contain all the related files and logs for the specific damage report.


        // Breadcrumbs for navigation
        $breadcrumbs = [
            ['title' => 'Home', 'url' => ''],
            ['title' => 'Tempah', 'url' => '/staff'],
            ['title' => 'Details', 'url' => '/staff/details'],
            ['title' => "$kerosakan_id", 'url' => "/tempah_id"]
        ];

        // Include the appropriate view for displaying the damage details
        include 'views/system/report/kerosakan/details.php';
    } else {
        // If no rows are found, handle it (optional)
        notFound("$");
    }
}

