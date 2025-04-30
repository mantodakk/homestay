<?php


if (isset($_POST['tempahan_baharu_form'])) {



    // Make sure to sanitize the inputs
    $user_id = $_POST['user_id'];
    $permohonan_type = "perlepasan";
    $status = 1;
    $dates = $_POST['dates'];
    $start_times = $_POST['time_start'];
    $end_times = $_POST['time_end'];
    $days = count($dates);
    $time_slip = 0; // or calculate if needed

    $filename = basename($_FILES['bukti']["name"]);
    $place = $_POST['tempat'];
    $purpose = $_POST['tujuan'];
    $lecturer_id = $_POST['lecturer_id'];


    // Insert into `permohonan`
    $sql = "INSERT INTO permohonan (user_id, permohonan_type, status, days, time_slip,file,place,purpose,lecturer_id) 
          VALUES ('$user_id', '$permohonan_type', '$status', '$days', '$time_slip','$filename','$place','$purpose','$lecturer_id')";
    if (mysqli_query($conn, $sql)) {
        $permohonan_id = mysqli_insert_id($conn);

        // Insert into `permohonan_dates`
        for ($i = 0; $i < count($dates); $i++) {
            $date = mysqli_real_escape_string($conn, $dates[$i]);
            $time_start = mysqli_real_escape_string($conn, $start_times[$i]);
            $time_end = mysqli_real_escape_string($conn, $end_times[$i]);

            $sql2 = "INSERT INTO permohonan_dates (permohonan_id, date, time_start, time_end)
                   VALUES ($permohonan_id, '$date', '$time_start', '$time_end')";
            mysqli_query($conn, $sql2);
        }


        $result = uploadFile('bukti', 'assets/uploads/permohonan/' . $permohonan_id . '/');

        if ($result['success']) {
            echo "File uploaded: " . $result['file_path'];
        } else {
            echo "Error: " . $result['message'];
        }

        // Redirect after success
        header("Location: " . $basePath2 . "/permohonan/perlepasan");
        exit();
    }
}

