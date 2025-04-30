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
