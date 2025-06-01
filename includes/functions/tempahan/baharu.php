<?php


if (isset($_POST['tempahan_baharu_form'])) {
    $errors = array();

    // Make sure to sanitize the inputs
    $user_id = $_POST['user_id'];
    $tarikh_mula = $_POST['tarikh_mula'];
    $tarikh_tamat = $_POST['tarikh_tamat'];
    $total_price = $_POST['total_price'];

    // Convert the string date inputs to DateTime objects
    try {
        $startDate = new DateTime($tarikh_mula);
        $endDate = new DateTime($tarikh_tamat);

        // Set check-in time to 14:00 (2:00 PM)
        $startDate->setTime(14, 0); // 14:00 (2:00 PM)

        // Set check-out time to 12:00 (12:00 PM)
        $endDate->setTime(12, 0); // 12:00 (12:00 PM)

        // Format the dates as needed (for example, 'Y-m-d H:i:s')
        $formattedStartDate = $startDate->format('Y-m-d H:i:s');
        $formattedEndDate = $endDate->format('Y-m-d H:i:s');
    } catch (Exception $e) {
        $errors['date'] = "Invalid date format!";
    }

    if (empty($errors)) {
        // Insert into `permohonan` table
        $sql = "INSERT INTO bookings (user_id, tarikh_mula, tarikh_tamat,total_price) 
                VALUES ('$user_id', '$formattedStartDate', '$formattedEndDate','$total_price')";

        if (mysqli_query($conn, $sql)) {
            $booking_id = mysqli_insert_id($conn);  // Get the ID of the newly inserted booking

            // Call the upload function and get the results
            $uploadResults = uploadFile('file_input', "assets/uploads/$booking_id/");

            // Check each result for errors
            foreach ($uploadResults as $uploadResult) {
                if ($uploadResult['success']) {
                    // If upload is successful, get the file name and update the database
                    $filename = $uploadResult['file_name'];  // Get the file name
                    $updateSql = "UPDATE bookings SET payment_file = '$filename' WHERE id = $booking_id";
                    if (!mysqli_query($conn, $updateSql)) {
                        $errors['mysql'] = "Error updating payment_file: " . mysqli_error($conn);
                    }
                } else {
                    // If upload fails, add an error to the errors array
                    $errors['file'] = $uploadResult['message'];  // Use the error message from the upload
                }
            }

        } else {
            $errors['mysql'] = mysqli_error($conn);
        }

    }

 
        // No errors, proceed to redirect
        header("Location: " . $basePath2 . "/tempah/baharu");
        exit();
    
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
                "overlap" => false,
                "id" => $row['id'],
            ];
        } else {
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
    }

    header('Content-Type: application/json');
    echo json_encode($events);
    exit;
}
