<?php


function uploadFile($fileInputName, $targetDir = "assets/uploads/", $allowedTypes = ['jpg', 'png', 'jpeg', 'pdf'], $maxSizeMB = 5)
{
    // Initialize results array to store upload success/failure info
    $uploadResults = [];

    // Check if the files exist in $_FILES and the array is not empty
    if (!isset($_FILES[$fileInputName]) || empty($_FILES[$fileInputName]['name'])) {
        return ['success' => false, 'message' => 'No files uploaded or upload error.'];
    }

    // Ensure the target directory exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // Create directories recursively with proper permissions
    }

    // Loop through each uploaded file
    for ($i = 0; $i < count($_FILES[$fileInputName]['name']); $i++) {
        // Fetch individual file info
        $fileName = $_FILES[$fileInputName]['name'][$i];
        $fileTmp = $_FILES[$fileInputName]['tmp_name'][$i];
        $fileSize = $_FILES[$fileInputName]['size'][$i];
        $fileError = $_FILES[$fileInputName]['error'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $maxSizeBytes = $maxSizeMB * 1024 * 1024;



        // Validate file extension
        if (!in_array($fileExt, $allowedTypes)) {
            $uploadResults[] = ['success' => false, 'message' => "Invalid file type for file: $fileName , $fileExt"];
            return $uploadResults;
        }

        // Validate file size
        if ($fileSize > $maxSizeBytes) {
            $uploadResults[] = ['success' => false, 'message' => "File too large for file: $fileName"];
            return $uploadResults;
        }


        // Check for upload error
        if ($fileError !== UPLOAD_ERR_OK) {
            $uploadResults[] = ['success' => false, 'message' => "Error uploading file: $fileName (Error code: $fileError)"];
            return $uploadResults;
        }



        // Define the target file path (here using $damage_id as part of the directory structure)
        $targetPath = $targetDir . basename($fileName);

        // Move the uploaded file to the target path
        if (move_uploaded_file($fileTmp, $targetPath)) {
            $uploadResults[] = ['success' => true, 'file_path' => $targetPath, 'file_name' => $fileName];
        } else {
            $uploadResults[] = ['success' => false, 'message' => "Failed to move uploaded file: $fileName"];
        }
    }

    // Return the results
    return $uploadResults;
}
