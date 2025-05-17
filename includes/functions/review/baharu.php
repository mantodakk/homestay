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
 



if (isset($_POST['senarai_review'])) {
    $start = isset($_POST['start']) && $_POST['start'] >= 0 ? (int) $_POST['start'] : 0;
    $length = isset($_POST['length']) && $_POST['length'] > 0 ? (int) $_POST['length'] : 5;
    $role = $_POST['role'] ?? 5;
    $user_id = $_POST['user_id'] ?? 0;
    $draw = (int) ($_POST['draw'] ?? 1);

    // WHERE clause if role is 2 (e.g. regular user)
    $whereClause = ($role == "2") ? "WHERE user_id = '$user_id'" : "";

    // Main review query
    $sql = "SELECT id, user_id, description, star, created_at, status FROM reviews $whereClause ORDER BY id DESC LIMIT $start, $length";
    $result = $conn->query($sql);

    // Count filtered
    $count_filtered_sql = "SELECT COUNT(*) AS total FROM reviews $whereClause";
    $filtered_records = $conn->query($count_filtered_sql)->fetch_assoc()['total'];

    // Count total (without filtering)
    $count_total_sql = "SELECT COUNT(*) AS total FROM reviews";
    $total_records = $conn->query($count_total_sql)->fetch_assoc()['total'];

    // Prepare response data
    $reviews_data = [];
    while ($row = $result->fetch_assoc()) {
        $reviews_data[] = [
            'id' => $row['id'],
            'user_id' => $row['user_id'],
            'description' => $row['description'],
            'star' => $row['star'],
            'created_at' => $row['created_at'],
            'status' => $row['status']
        ];
    }

    echo json_encode([
        'draw' => $draw,
        'recordsTotal' => (int) $total_records,
        'recordsFiltered' => (int) $filtered_records,
        'data' => $reviews_data
    ]);
    exit;
}
