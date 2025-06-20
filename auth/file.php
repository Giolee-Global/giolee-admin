<?php
// Connect database
include "./config/db.php";

//Breadcrumb Query
if (isset($_POST['breadcrumb_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $fileName = $_FILES['filePath']['name'];
    $fileTmp = $_FILES['filePath']['tmp_name'];
    $fileType = $_FILES['filePath']['type'];
    
    $uploadDir = 'upload/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
        exit();
    }

    // Check if entry already exists for this service in `breadcrumb` table
    $sql = mysqli_query($conn, "SELECT * FROM breadcrumb WHERE serviceID = '$serviceID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing breadcrumb record
        $update = mysqli_query($conn, "UPDATE breadcrumb SET filePath = '$targetPath' WHERE serviceID = '$serviceID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Breadcrumb image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update breadcrumb image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new breadcrumb record
        $insert = mysqli_query($conn, "INSERT INTO breadcrumb (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Breadcrumb image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert breadcrumb image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
    exit();
}


//Hero Query
if (isset($_POST['hero_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $fileName = $_FILES['filePath']['name'];
    $fileTmp = $_FILES['filePath']['tmp_name'];
    $fileType = $_FILES['filePath']['type'];
    
    $uploadDir = 'upload/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
        exit();
    }

    // Check if entry already exists for this service in `hero` table
    $sql = mysqli_query($conn, "SELECT * FROM hero WHERE serviceID = '$serviceID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing hero record
        $update = mysqli_query($conn, "UPDATE hero SET filePath = '$targetPath' WHERE serviceID = '$serviceID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Hero image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update hero image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new hero record
        $insert = mysqli_query($conn, "INSERT INTO hero (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Hero image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert hero image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
    exit();
}


//Section One Gallery Query
if (isset($_POST['section_one_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $uploadDir = 'upload/';
    $files = $_FILES['filePath'];
    $uploadCount = count($files['name']);
    $uploadErrors = [];
    $uploadSuccess = [];

    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    for ($i = 0; $i < $uploadCount; $i++) {
        $fileName = $files['name'][$i];
        $fileTmp = $files['tmp_name'][$i];
        $fileType = $files['type'][$i];

        // Only accept image files
        if (!getimagesize($fileTmp)) {
            $uploadErrors[] = "$fileName is not a valid image file.";
            continue;
        }

        // Sanitize file name and handle duplicates
        $safeFileName = $conn->real_escape_string($fileName);
        $targetPath = $uploadDir . $safeFileName;

        if (file_exists($targetPath)) {
            $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $safeFileName;
            $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
        }

        // Move uploaded file
        if (!move_uploaded_file($fileTmp, $targetPath)) {
            $uploadErrors[] = "Failed to move $fileName.";
            continue;
        }

        // Check if a media record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
            if ($insert) {
                $uploadSuccess[] = "$fileName uploaded successfully.";
            } else {
                $uploadErrors[] = "Failed to insert record for $fileName: " . mysqli_error($conn);
            }
        }
    }

    // Set session messages
    if (!empty($uploadSuccess)) {
        $_SESSION['success_message'] = implode($uploadSuccess);
    }

    if (!empty($uploadErrors)) {
        $_SESSION['error_message'] = implode($uploadErrors);
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
    exit();
}


//Section Two Gallery Query
if (isset($_POST['section_two_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $uploadDir = 'upload/';
    $files = $_FILES['filePath'];
    $uploadCount = count($files['name']);
    $uploadErrors = [];
    $uploadSuccess = [];

    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    for ($i = 0; $i < $uploadCount; $i++) {
        $fileName = $files['name'][$i];
        $fileTmp = $files['tmp_name'][$i];
        $fileType = $files['type'][$i];

        // Only accept image files
        if (!getimagesize($fileTmp)) {
            $uploadErrors[] = "$fileName is not a valid image file.";
            continue;
        }

        // Sanitize file name and handle duplicates
        $safeFileName = $conn->real_escape_string($fileName);
        $targetPath = $uploadDir . $safeFileName;

        if (file_exists($targetPath)) {
            $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $safeFileName;
            $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
        }

        // Move uploaded file
        if (!move_uploaded_file($fileTmp, $targetPath)) {
            $uploadErrors[] = "Failed to move $fileName.";
            continue;
        }

        // Check if a media_two record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media_two WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media_two SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media_two (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
            if ($insert) {
                $uploadSuccess[] = "$fileName uploaded successfully.";
            } else {
                $uploadErrors[] = "Failed to insert record for $fileName: " . mysqli_error($conn);
            }
        }
    }

    // Set session messages
    if (!empty($uploadSuccess)) {
        $_SESSION['success_message'] = implode($uploadSuccess);
    }

    if (!empty($uploadErrors)) {
        $_SESSION['error_message'] = implode($uploadErrors);
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
    exit();
}


//Section Two Gallery Query
if (isset($_POST['section_three_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $uploadDir = 'upload/';
    $files = $_FILES['filePath'];
    $uploadCount = count($files['name']);
    $uploadErrors = [];
    $uploadSuccess = [];

    // Ensure upload directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    for ($i = 0; $i < $uploadCount; $i++) {
        $fileName = $files['name'][$i];
        $fileTmp = $files['tmp_name'][$i];
        $fileType = $files['type'][$i];

        // Only accept image files
        if (!getimagesize($fileTmp)) {
            $uploadErrors[] = "$fileName is not a valid image file.";
            continue;
        }

        // Sanitize file name and handle duplicates
        $safeFileName = $conn->real_escape_string($fileName);
        $targetPath = $uploadDir . $safeFileName;

        if (file_exists($targetPath)) {
            $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $safeFileName;
            $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
        }

        // Move uploaded file
        if (!move_uploaded_file($fileTmp, $targetPath)) {
            $uploadErrors[] = "Failed to move $fileName.";
            continue;
        }

        // Check if a media_three record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media_three WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media_three SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media_three (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
            if ($insert) {
                $uploadSuccess[] = "$fileName uploaded successfully.";
            } else {
                $uploadErrors[] = "Failed to insert record for $fileName: " . mysqli_error($conn);
            }
        }
    }

    // Set session messages
    if (!empty($uploadSuccess)) {
        $_SESSION['success_message'] = implode($uploadSuccess);
    }

    if (!empty($uploadErrors)) {
        $_SESSION['error_message'] = implode($uploadErrors);
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
    exit();
}