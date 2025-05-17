<?php

if (isset($_POST['cuti_calendar'])) {

    $sql = "SELECT * FROM cuti";
    $result = mysqli_query($conn, $sql);

    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        // Convert tarikh_mula to DateTime and subtract one day
        $startDate = new DateTime($row['tarikh_mula']);
        $startDate->modify('-1 day');

        $endDate = new DateTime($row['tarikh_tamat']);
        $endDate->modify('+1 day'); // Make 'end' exclusive

        $events[] = [
            "start" => $startDate->format('Y-m-d'),
            "end" => $endDate->format('Y-m-d'),
            "display" => 'background',
            "backgroundColor" => 'red',
            "overlap" => false,
        ];
    }

    echo json_encode($events);
    exit;
}



if (isset($_POST['cuti_calendar_admin'])) {

    $sql = "SELECT * FROM cuti";
    $result = mysqli_query($conn, $sql);

    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        // Convert tarikh_mula to DateTime and subtract one day
        $startDate = new DateTime($row['tarikh_mula']);
        $startDate->modify('-1 day');

        $endDate = new DateTime($row['tarikh_tamat']);
        $endDate->modify('+1 day'); // Make 'end' exclusive

        $events[] = [
            "start" => $startDate->format('Y-m-d'),
            "end" => $endDate->format('Y-m-d'),
            // "display" => 'background',
            "title" => "Cuti #" . $row['id'],

            // "backgroundColor" => 'red',
            "overlap" => false,
        ];
    }

    echo json_encode($events);
    exit;
}



if (isset($_POST['tempahan_cuti_admin'])) {
    // Sanitize inputs
    $user_id = (int) $_POST['user_id'];
    $tarikh_mula = mysqli_real_escape_string($conn, $_POST['tarikh_mula'] ?? '');
    $tarikh_tamat = mysqli_real_escape_string($conn, $_POST['tarikh_tamat'] ?? '');

    if ($tarikh_mula && $tarikh_tamat && $user_id) {
        $sql = "INSERT INTO cuti (user_id, tarikh_mula, tarikh_tamat)
                VALUES ($user_id, '$tarikh_mula', '$tarikh_tamat')";

        if (mysqli_query($conn, $sql)) {
            // echo json_encode(['success' => true, 'message' => 'Cuti inserted successfully']);
        } else {
            // echo json_encode(['success' => false, 'message' => 'Failed to insert cuti']);
        }
    } else {
        // echo json_encode(['success' => false, 'message' => 'Missing required data']);
    }
    header("Location: " . $basePath2 . "/cuti/senarai");

    exit;
}



if (isset($_POST['tempahan_calendar_2'])) {

    $user_id = $_POST['user_id'];
    $role = $_POST['role'];
    $start = $_POST['start']; // e.g. '2025-05-01'
    $end = $_POST['end'];     // e.g. '2025-05-31'

    // Make sure inputs are safe
    $start = mysqli_real_escape_string($conn, $start);
    $end = mysqli_real_escape_string($conn, $end);

    // Only fetch bookings that overlap the visible date range
    $sql = "SELECT * FROM bookings 
            WHERE (tarikh_mula <= '$end' AND tarikh_tamat >= '$start')";
    $result = mysqli_query($conn, $sql);

    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $startDate = new DateTime($row['tarikh_mula']);
        $endDate = new DateTime($row['tarikh_tamat']);

        // Status-based class
        if ($row['status'] == 1) {
            $className = 'bg-warning';
        } elseif ($row['status'] == 2) {
            $className = 'bg-success';
        } else {
            $className = 'bg-danger';
        }


        $events[] = [
            "start" => $startDate->format('Y-m-d'),
            "end" => $endDate->format('Y-m-d'),
            // "start" => $startDate->format('Y-m-d H:i:s'),
            // "end" => $endDate->format('Y-m-d H:i:s'),

            "title" => "Tempahan #" . $row['id'],
            "className" => $className,
            "overlap" => false,
            "id" => $row['id'],

        ];

    }

    header('Content-Type: application/json');
    echo json_encode($events);
    exit;
}
