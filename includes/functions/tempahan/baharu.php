<?php


if (isset($_POST['tempahan_baharu_form'])) {



    // Make sure to sanitize the inputs
    $user_id = '1';
    $tarikh_mula = $_POST['tarikh_mula'];
    $tarikh_tamat = $_POST['tarikh_tamat'];


    // Convert the string date inputs to DateTime objects
    $startDate = new DateTime($tarikh_mula);
    $endDate = new DateTime($tarikh_tamat);

    // Set check-in time to 14:00 (2:00 PM)
    $startDate->setTime(14, 0); // 14:00 (2:00 PM)

    // Set check-out time to 12:00 (12:00 PM)
    $endDate->setTime(12, 0); // 12:00 (12:00 PM)


    // $filename = basename($_FILES['bukti']["name"]);

    // Format the dates as needed (for example, 'Y-m-d H:i:s')
    $formattedStartDate = $startDate->format('Y-m-d H:i:s');
    $formattedEndDate = $endDate->format('Y-m-d H:i:s');

    // // Insert into `permohonan`
    $sql = "INSERT INTO bookings (user_id, tarikh_mula, tarikh_tamat) 
    VALUES ('$user_id', '$formattedStartDate', '$formattedEndDate')";

    if (mysqli_query($conn, $sql)) {
        $booking_id = mysqli_insert_id($conn);  // Get the ID of the newly inserted booking

        $uploadResult = uploadFile('file_input');  // Replace 'file_input' with your actual form input name
        if ($uploadResult) {
            $filename = $uploadResult['file_name'];
            // Assuming $uploadResult contains the file path or name
            $updateSql = "UPDATE bookings SET payment_file = '$filename' WHERE id = $booking_id";
            if (!mysqli_query($conn, $updateSql)) {
                echo "Error updating payment_file: " . mysqli_error($conn);
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    //     // Redirect after success
    header("Location: " . $basePath2 . "/tempah/baharu");
    exit();
    // }
}

if (isset($_POST['tempahan_calendar'])) {

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

        // Events for other users shown as background
        if ($row['user_id'] != $user_id) {
            $events[] = [
                "start" => $startDate->format('Y-m-d'),
                "end" => $endDate->format('Y-m-d'),
                // "start" => $startDate->format('Y-m-d H:i:s'),
                // "end" => $endDate->format('Y-m-d H:i:s'),

                // "display" => 'background',
                "backgroundColor" => 'grey',
                "overlap" => false
            ];
        } else {
            $events[] = [
                "start" => $startDate->format('Y-m-d'),
                "end" => $endDate->format('Y-m-d'),
                // "start" => $startDate->format('Y-m-d H:i:s'),
                // "end" => $endDate->format('Y-m-d H:i:s'),

                "title" => "Tempahan #" . $row['id'],
                "className" => $className,
                "overlap" => false
            ];
        }
    }

    header('Content-Type: application/json');
    echo json_encode($events);
    exit;
}
