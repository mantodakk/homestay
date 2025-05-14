<?php


if (isset($_POST['tempahan_notify_admin'])) {

 
    $admin_id = $_POST['admin_id'];
 
 
    $result = publishToBeamsInterests(
        [  $admin_id ],    // or ['2'] for testing
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

 