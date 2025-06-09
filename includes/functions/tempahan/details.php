<?php


if (isset($_POST['tempahan_notify_admin'])) {


    $admin_id = $_POST['admin_id'];


    $result = publishToBeamsInterests(
        [$admin_id],    // or ['2'] for testing
        'Guest Bell',
        'A guest has ring the bell',
        " ",

    );

    echo "test";
    //     // Redirect after success
    // header("Location: " . $basePath2 . "/tempah/baharu");
    // exit();
    // }
}



if (isset($_POST['approve_booking'])) {
    $tempah_id = $_POST['tempah_id'];


    $guest_id = $_POST['guest_id'];

    $sql = "UPDATE bookings SET status = '2' WHERE id = $tempah_id";
    if (mysqli_query($conn, $sql)) {

        //hantar notification
        $result = publishToBeamsInterests(
            [$guest_id],    // or ['2'] for testing
            'Booking Approved',
            'Booking Approved',
            $basePath2 . "/tempah/details/$tempah_id",

        );

        // echo "test";
        //     // Redirect after success
        header("Location: " . $basePath2 . "/tempah/details/$tempah_id");
        exit();

    }
    // }
}




if (isset($_POST['reject_booking'])) {
    $tempah_id = $_POST['tempah_id'];


    $guest_id = $_POST['guest_id'];

    $sql = "UPDATE bookings SET status = '0' WHERE id = $tempah_id";

    if (mysqli_query($conn, $sql)) {


        $result = publishToBeamsInterests(
            [$guest_id],    // or ['2'] for testing
            'Booking Rejected',
            'Booking Rejected',
            $basePath2 . "/tempah/details/$tempah_id",

        );

        // echo "test";
        //     // Redirect after success
        header("Location: " . $basePath2 . "/tempah/details/$tempah_id");
        exit();
    }
    // }
}


if (isset($_POST['update_booking_details'])) {
    // Get task checkbox values
    $task1 = isset($_POST['task_1']) ? 1 : 0;
    $task2 = isset($_POST['task_2']) ? 1 : 0;
    $task3 = isset($_POST['task_3']) ? 1 : 0;
    $task4 = isset($_POST['task_4']) ? 1 : 0;

    $tempah_id = $_POST['tempah_id'];

    // Handle image uploads
    $pic_task2 = $pic_task3 = "";
    $insertSql = "";
    // Check if task 2 picture is uploaded
    if (isset($_FILES['pic_task2'])) {
        // File upload for Task 2

        $uploadResults = uploadFile('pic_task2', "assets/uploads/$tempah_id/booking/");  // Replace 'file_input' with your actual form input name

        // Check each result for errors
        foreach ($uploadResults as $uploadResult) {
            if ($uploadResult['success']) {
                // If upload is successful, get the file name and update the database
                $pic_task2 = $uploadResult['file_name'];  // Get the file name
                $insertSql = "INSERT INTO booking_details (booking_id ,int_cond,file) 
                  VALUES ($tempah_id, '2',  '$pic_task2')";
                $task2 = 1;
            } else {
                // If upload fails, add an error to the errors array
                $errors['file'] = $uploadResult['message'];  // Use the error message from the upload
            }
        }
        // Prepare SQL for inserting into booking_details table

    }

    // Check if task 3 picture is uploaded
    if (isset($_FILES['pic_task3'])) {
        $uploadResults = uploadFile('pic_task3', "assets/uploads/$tempah_id/booking/");  // Replace 'file_input' with your actual form input name
        // Check each result for errors
        foreach ($uploadResults as $uploadResult) {
            if ($uploadResult['success']) {
                // If upload is successful, get the file name and update the database
                $pic_task3 = $uploadResult['file_name'];  // Get the file name
                $insertSql = "INSERT INTO booking_details (booking_id ,int_cond,file) 
                  VALUES ($tempah_id, '3',  '$pic_task3')";
                $task3 = 1;

            } else {
                // If upload fails, add an error to the errors array
                $errors['file'] = $uploadResult['message'];  // Use the error message from the upload
            }
        }

    }

    // Calculate total task completion status
    $task_list = $task1 + $task2 + $task3 + $task4;

    // Prepare SQL for updating the booking details
    $updateSql = "UPDATE bookings SET status2 = $task_list  WHERE id = $tempah_id";

    // Execute the update query
    if ($conn->query($updateSql) === TRUE) {
        if (!empty($insertSql)) {
            if (mysqli_query($conn, $insertSql)) {

                // echo "Booking details updated successfully!";
            }
            // echo "Booasdsaking details updated successfully!";

        }
    } else {
        // echo "Error updating booking details: " . $conn->error;
    }

    header("Location: " . $basePath2 . "/tempah/details/$tempah_id");
    exit();
}


// Function to get status label and button class based on the input value
