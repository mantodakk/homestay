<?php


function tempah_baharu()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $query = "SELECT setting_key, setting_value FROM web_settings";
    $result = $conn->query($query);
    $settings = [];

    // Fetch settings into an associative array
    while ($row = $result->fetch_assoc()) {
        $settings[$row['setting_key']] = $row['setting_value'];
    }

    // Fetch the original price (fallback) and the discounted price (if available)
    $originalPrice = isset($settings['price_per_night']) ? floatval($settings['price_per_night']) : 0;
    $discountedPrice = isset($settings['discount_price_per_night']) ? floatval($settings['discount_price_per_night']) : 0;

    // Determine which price to use
    $priceToUse = ($discountedPrice > 0) ? $discountedPrice : $originalPrice;



    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];

    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";



    include 'views/system/tempah/baharu.php';

}

