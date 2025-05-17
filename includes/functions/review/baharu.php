<?php
if (isset($_POST['reviewbaharu'])) {
    // --- Get form data ---
    $user_id = ($_POST['user_id']);

    $description = trim($_POST['description'] ?? '');
    $star = ($_POST['star'] ?? 0);

    // Sanitize for DB
    $description = $conn->real_escape_string($description);
    $star = max(1, min(5, $star)); // Ensure between 1-5






    // --- Save the review ---
    $review_sql = "INSERT INTO reviews (user_id,description, star, status)
                   VALUES ('$user_id','$description', '$star', 1)";
    $conn->query($review_sql);

    // Optional: Redirect or show success message
    header("Location: " . $basePath2 . "/review/senarai");
    exit;
}
?>