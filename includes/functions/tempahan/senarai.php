<?php


if (isset($_POST['senarai_tempahan_list'])) {

    $start = isset($_POST['start']) && $_POST['start'] >= 0 ? (int) $_POST['start'] : 0;
    $length = isset($_POST['length']) && $_POST['length'] > 0 ? (int) $_POST['length'] : 5;
    $role = isset($_POST['role']) ? $_POST['role'] : 5;
    $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : 0;
    $draw = isset($_POST['draw']) ? (int) $_POST['draw'] : 1;

    // Build the main SQL query
    $sql = "SELECT id, user_id, tarikh_mula, tarikh_tamat, created_at, status FROM bookings";

    $whereClause = "";

    if ($role == "2") {
        $whereClause = " WHERE user_id = '$user_id'";
    }

    $sql .= $whereClause;
    $sql .= " ORDER BY id DESC LIMIT $start, $length";

    $result = $conn->query($sql);

    // Count filtered records
    $count_filtered_sql = "SELECT COUNT(*) AS total FROM bookings" . $whereClause;
    $count_filtered_result = $conn->query($count_filtered_sql);
    $filtered_records = $count_filtered_result->fetch_assoc()['total'];

    // Count total records
    $count_total_sql = "SELECT COUNT(*) AS total FROM bookings";
    $count_total_result = $conn->query($count_total_sql);
    $total_records = $count_total_result->fetch_assoc()['total'];

    // Prepare data array
    $bookings_data = [];

    while ($row = $result->fetch_assoc()) {
        $bookings_data[] = [
            'id' => $row['id'],
            'user_id' => $row['user_id'],
            'tarikh_mula' => $row['tarikh_mula'],
            'tarikh_tamat' => $row['tarikh_tamat'],
            'created_at' => $row['created_at'],
            'status' => $row['status']
        ];
    }

    // JSON response
    $response = [
        'draw' => $draw,
        'recordsTotal' => (int) $total_records,
        'recordsFiltered' => (int) $filtered_records,
        'data' => $bookings_data
    ];

    echo json_encode($response);
    exit;
}



// PHP: Get table booking data with status = 2
if (isset($_POST['senarai_tempahan_chart'])) {
    $year = $_GET['year'] ?? date('Y');  // Default to current year if no year is passed
    $status = 2;  // Set status to 2 (completed bookings or a specific status)

    // Sanitize inputs (in case of user input, for security)
    $year = $conn->real_escape_string($year);
    
    // Array to store monthly bookings for the given status
    $monthly_bookings = array_fill(1, 12, 0);

    // SQL query to fetch monthly bookings for status = 2
    $sql = "SELECT MONTH(created_at) AS month, COUNT(*) AS bookings
            FROM bookings
            WHERE YEAR(created_at) = '$year' AND status = $status
            GROUP BY MONTH(created_at)";

    // Execute the query
    $result = $conn->query($sql);

    // Fetch results and populate the monthly bookings array
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $monthly_bookings[(int) $row['month']] = (int) $row['bookings'];
        }
    }

    // Return the data as JSON
    echo json_encode(array_values($monthly_bookings));
    die();
}
