<?php


if (isset($_POST['kerosakan_list'])) {
    $start = isset($_POST['start']) && $_POST['start'] >= 0 ? (int) $_POST['start'] : 0;
    $length = isset($_POST['length']) && $_POST['length'] > 0 ? (int) $_POST['length'] : 10;
    $role = $_POST['role'] ?? 5;
    $user_id = (int) ($_POST['user_id'] ?? 0);
    $draw = (int) ($_POST['draw'] ?? 1);

    // Filter by user if role == 2 (regular user)
    $whereClause = ($role == "2") ? "WHERE d.user_id = $user_id" : "";

    // Main query with LEFT JOINs
    $sql = "SELECT 
            d.id,
            d.title,
            d.description,
            d.status,
            d.user_id,
            d.priority,
            d.cost,
            d.created_at,
            d.updated_at,
            a.file AS attachment,
            l.comment AS latest_comment,
            l.action AS latest_action
        FROM damage d
        LEFT JOIN (
            SELECT damage_id, file 
            FROM damage_attachments 
            GROUP BY damage_id
        ) a ON d.id = a.damage_id
        LEFT JOIN (
            SELECT l1.*
            FROM damage_log l1
            INNER JOIN (
                SELECT damage_id, MAX(created_at) AS max_created
                FROM damage_log
                GROUP BY damage_id
            ) l2 ON l1.damage_id = l2.damage_id AND l1.created_at = l2.max_created
        ) l ON d.id = l.damage_id
        $whereClause
        ORDER BY d.id DESC
        LIMIT $start, $length
    ";

    $result = $conn->query($sql);

    // Count filtered
    $filtered_sql = "SELECT COUNT(*) AS total FROM damage d $whereClause";
    $recordsFiltered = $conn->query($filtered_sql)->fetch_assoc()['total'];

    // Count total (no filter)
    $total_sql = "SELECT COUNT(*) AS total FROM damage";
    $recordsTotal = $conn->query($total_sql)->fetch_assoc()['total'];

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description'],
            'status' => $row['status'],
            'priority' => $row['priority'],
            'cost' => $row['cost'],
            'user_id' => $row['user_id'],
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at'],
            'attachment' => $row['attachment'],
            'latest_comment' => $row['latest_comment'],
            'latest_action' => $row['latest_action']
        ];
    }

    echo json_encode([
        'draw' => $draw,
        'recordsTotal' => (int) $recordsTotal,
        'recordsFiltered' => (int) $recordsFiltered,
        'data' => $data
    ]);

    die();
}



if (isset($_POST['add_kerosakan'])) {
    $title = $conn->real_escape_string($_POST['title'] ?? '');
    $description = $conn->real_escape_string($_POST['description'] ?? '');
    $status = isset($_POST['status']) ? (int) $_POST['status'] : 1;
    $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : 0;
    $category_id = isset($_POST['category_id']) ? (int) $_POST['category_id'] : null;
    $priority = isset($_POST['priority']) ? (int) $_POST['priority'] : null;
    $cost = isset($_POST['cost']) ? (float) $_POST['cost'] : null;

    if ($title && $description && $user_id) {
        $sql = "
    INSERT INTO damage (title, description, status, user_id, category_id, priority, cost)
    VALUES ('$title', '$description', $status, $user_id, " .
            ($category_id !== null ? $category_id : "NULL") . ", " .
            ($priority !== null ? $priority : "NULL") . ", " .
            ($cost !== null ? $cost : "NULL") . ")
";


        if ($conn->query($sql)) {
            $damage_id = $conn->insert_id;


            // Handle file upload (optional)
            $targetDir = "assets/uploads/kerosakan/$damage_id/";

            if (isset($_FILES['attachment'])) {
                $uploadResults = uploadFile('attachment', $targetDir); // Pass the updated target directory

                // Check upload results
                foreach ($uploadResults as $upload) {
                    if ($upload['success']) {
                        // Insert each file path into the database
                        $filePath = $conn->real_escape_string($upload['file_path']);
                        $fileName = $conn->real_escape_string($upload['file_name']);

                        $attachSql = "INSERT INTO damage_attachments (damage_id, file, uploaded_at) VALUES ($damage_id, '$filePath', NOW())";
                        if (!$conn->query($attachSql)) {
                            $message = "Damage report added but failed to save attachment: " . $conn->error;
                            break;
                        }
                    } else {
                        $message = "Damage report added but attachment upload failed: " . $upload['message'];
                        break;
                    }
                }

                // If all files uploaded successfully
                if (!isset($message)) {
                    $message = "Damage report and all attachments added successfully.";
                }
            }
        } else {
            $message = "Failed to add damage report: " . $conn->error;
        }
    } else {
        $message = "Please fill in all required fields.";
    }
    // echo $message;

    header("Location: " . $basePath2 . "/aduan/kerosakan/senarai");
    exit();

}





if (isset($_POST['update_kerosakan'])) {
    $damage_id = (int) $_POST['damage_id']; // Cast to integer for safety
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $priority = mysqli_real_escape_string($conn, $_POST['priority']);

    // Update the damage record in the database
    $sql = "UPDATE damage SET cost = '$cost', status = '$status', priority = '$priority' WHERE id = $damage_id";


    $action = "update";
    $comment = "update cost $cost , status $status , priority $priority";
    $sql_insert_log = "INSERT INTO damage_log (damage_id, user_id, action, comment ) 
                           VALUES ($damage_id, $user_id, '$action', '$comment' )";
    if (mysqli_query($conn, $sql)) {
        // Success message or redirect
        // echo "Damage details updated successfully!";
        // Optionally redirect to the same page or another page:
        // header('Location: damage_details.php?id=' . $damage_id);
    } else {
        // Error handling
        echo "Error updating damage details: " . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/aduan/kerosakan/$damage_id");
    exit();

}