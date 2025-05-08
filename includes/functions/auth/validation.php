<?php




function checkRole()
{
    // Ensure the 'role' session is set and is one of the valid roles
    if (isset($_SESSION['user_details']['role'])) {
        $role = $_SESSION['user_details']['role'];
        // Check for different roles
        if ($role == 1) {
            return 'admin';
        } elseif ($role == 2) {
            return 'guest';
        } else{

        }
    }

    echo "<script>console.log(" . json_encode($role) . ");</script>";

}



function checkLogin()
{

    checkRole();
    if (!isset($_SESSION['user_details'])) {
        global $basePath2;

        header("Location: " . $basePath2 . "/login");
        exit();

    }

}
