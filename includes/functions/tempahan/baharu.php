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
    $sql = "INSERT INTO bookings (user_id,tarikh_mula,tarikh_tamat) 
          VALUES ('$user_id', '$formattedStartDate', '$formattedEndDate')";
    if (mysqli_query($conn, $sql)) {
 
    } else{
        echo "Error: " . mysqli_error($conn);

    }
    $uploadResult = uploadFile('file_input');  // Adjust 'file_input' to match the form's input name for file

 

    //     // Redirect after success
    header("Location: " . $basePath2 . "/tempah/baharu");
    exit();
    // }
}

