<?php

if (isset($_POST['page_view'])) {

    $page_url = $_POST['page_url'] ?? '';

    // Detect protocol (http or https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

    // Get host, e.g., localhost
    $host = $_SERVER['HTTP_HOST']; // e.g., localhost

    // Get base directory, e.g., /homestay if inside subfolder
    $basePath = dirname($_SERVER['SCRIPT_NAME']); // e.g., /homestay/views → /homestay

    // Build the full base URL
    $baseUrl = rtrim("$protocol://$host$basePath", '/'); // e.g., http://localhost/homestay

    // Remove baseUrl from $page_url if it matches
    if (strpos($page_url, $baseUrl) === 0) {
        $page_url = substr($page_url, strlen($baseUrl));
    }

    // Clean slashes
    $page_name = trim($page_url, '/');

    // Fallback to 'home' if empty
    if (empty($page_name)) {
        $page_name = 'index';
    }

    // Sanitize for DB
    $page_name = $conn->real_escape_string($page_name);

    $today = date('Y-m-d');

    // Check if there's already a row for this page today
    $sql = "SELECT * FROM page_views WHERE page_name = '$page_name' AND view_date = '$today'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Update existing view count
        $conn->query("UPDATE page_views SET view_count = view_count + 1 WHERE page_name = '$page_name' AND view_date = '$today'");
    } else {
        // Insert new row
        $conn->query("INSERT INTO page_views (page_name, view_date, view_count) VALUES ('$page_name', '$today', 1)");
    }

    die();
}



if (isset($_POST['page_views_get'])) {

    // Get the year from the request, defaulting to the current year
    $year = $_GET['year'] ?? date('Y');
    $monthly_views = array_fill(1, 12, 0);  // Initialize array to hold views for each month

 

    // SQL query to get the views grouped by month for the specified year
    $sql = "SELECT MONTH(view_date) AS month, SUM(view_count) AS views
            FROM page_views
            WHERE YEAR(view_date) = '$year'
            GROUP BY MONTH(view_date)";

    // Run the query
    $result = $conn->query($sql);

    // Check if the query returned results
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Store the result in the appropriate month index
            $monthly_views[(int) $row['month']] = (int) $row['views'];
        }
    }

    // Return the result as JSON
    echo json_encode(array_values($monthly_views));
    die();
}