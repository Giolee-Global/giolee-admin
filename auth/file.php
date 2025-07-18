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


//About Breadcrumb Query
if (isset($_POST['about_breadcrumb_upload_btn'])) {

    $aboutID = $conn->real_escape_string($_POST['aboutID']);
    $fileName = $_FILES['breadcrumb']['name'];
    $fileTmp = $_FILES['breadcrumb']['tmp_name'];
    $fileType = $_FILES['breadcrumb']['type'];
    
    $uploadDir = 'media/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=about'>";
        exit();
    }

    // Check if entry already exists for this about in `breadcrumb` table
    $sql = mysqli_query($conn, "SELECT * FROM about WHERE aboutID = '$aboutID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing breadcrumb record
        $update = mysqli_query($conn, "UPDATE about SET breadcrumb = '$targetPath' WHERE aboutID = '$aboutID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Breadcrumb image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update breadcrumb image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new breadcrumb record
        $insert = mysqli_query($conn, "INSERT INTO about (breadcrumb) VALUES ('$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Breadcrumb image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert breadcrumb image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=about'>";
    exit();
}


//About Section One Image Query
if (isset($_POST['about_sectionOne_upload_btn'])) {

    $aboutID = $conn->real_escape_string($_POST['aboutID']);
    $fileName = $_FILES['sectionOneImage']['name'];
    $fileTmp = $_FILES['sectionOneImage']['tmp_name'];
    $fileType = $_FILES['sectionOneImage']['type'];
    
    $uploadDir = 'media/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=about'>";
        exit();
    }

    // Check if entry already exists for this about in `Section one` table
    $sql = mysqli_query($conn, "SELECT * FROM about WHERE aboutID = '$aboutID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing section one image record
        $update = mysqli_query($conn, "UPDATE about SET sectionOneImage = '$targetPath' WHERE aboutID = '$aboutID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new image record
        $insert = mysqli_query($conn, "INSERT INTO about (sectionOneImage) VALUES ('$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=about'>";
    exit();
}


//About Section Two Image Query
if (isset($_POST['about_sectionTwo_upload_btn'])) {

    $aboutID = $conn->real_escape_string($_POST['aboutID']);
    $fileName = $_FILES['sectionTwoImage']['name'];
    $fileTmp = $_FILES['sectionTwoImage']['tmp_name'];
    $fileType = $_FILES['sectionTwoImage']['type'];
    
    $uploadDir = 'media/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=about'>";
        exit();
    }

    // Check if entry already exists for this about in `Section two` table
    $sql = mysqli_query($conn, "SELECT * FROM about WHERE aboutID = '$aboutID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing section two image record
        $update = mysqli_query($conn, "UPDATE about SET sectionTwoImage = '$targetPath' WHERE aboutID = '$aboutID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new image record
        $insert = mysqli_query($conn, "INSERT INTO about (sectionTwoImage) VALUES ('$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=about'>";
    exit();
}


//About Section Three Image Query
if (isset($_POST['about_sectionThree_upload_btn'])) {

    $aboutID = $conn->real_escape_string($_POST['aboutID']);
    $fileName = $_FILES['sectionThreeImage']['name'];
    $fileTmp = $_FILES['sectionThreeImage']['tmp_name'];
    $fileType = $_FILES['sectionThreeImage']['type'];
    
    $uploadDir = 'media/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=about'>";
        exit();
    }

    // Check if entry already exists for this about in `Section three` table
    $sql = mysqli_query($conn, "SELECT * FROM about WHERE aboutID = '$aboutID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing section two image record
        $update = mysqli_query($conn, "UPDATE about SET sectionThreeImage = '$targetPath' WHERE aboutID = '$aboutID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new image record
        $insert = mysqli_query($conn, "INSERT INTO about (sectionTwoImage) VALUES ('$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=about'>";
    exit();
}


//About Section Four Image Query
if (isset($_POST['about_sectionFour_upload_btn'])) {

    $aboutID = $conn->real_escape_string($_POST['aboutID']);
    $fileName = $_FILES['sectionFourImage']['name'];
    $fileTmp = $_FILES['sectionFourImage']['tmp_name'];
    $fileType = $_FILES['sectionFourImage']['type'];
    
    $uploadDir = 'media/';
    $targetPath = $uploadDir . $conn->real_escape_string($fileName);

    // If file exists, rename to avoid overwrite
    if (file_exists($targetPath)) {
        $uniqueName = uniqid() . '_' . rand(1000, 9999) . '_' . $fileName;
        $targetPath = $uploadDir . $conn->real_escape_string($uniqueName);
    }

    // Only accept image files
    if (!preg_match("!image!", $fileType)) {
        $_SESSION['error_message'] = "Only image uploads are allowed.";
        echo "<meta http-equiv='refresh' content='0; URL=about'>";
        exit();
    }

    // Check if entry already exists for this about in `Section four` table
    $sql = mysqli_query($conn, "SELECT * FROM about WHERE aboutID = '$aboutID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing section two image record
        $update = mysqli_query($conn, "UPDATE about SET sectionFourImage = '$targetPath' WHERE aboutID = '$aboutID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new image record
        $insert = mysqli_query($conn, "INSERT INTO about (sectionTwoImage) VALUES ('$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=about'>";
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


//Section Three Gallery Query
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


//Section Four Gallery Query
if (isset($_POST['section_four_upload_btn'])) {

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

        // Check if a media_four record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media_four WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media_four SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media_four (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
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


//Section Five Gallery Query
if (isset($_POST['section_five_upload_btn'])) {

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

        // Check if a media_five record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media_five WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media_five SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media_five (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
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


//Section Six Gallery Query
if (isset($_POST['section_six_upload_btn'])) {

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

        // Check if a media_six record already exists for this serviceID and original file name
        $checkQuery = mysqli_query($conn, "SELECT mediaID FROM media_six WHERE serviceID = '$serviceID' AND filePath LIKE '%$safeFileName%'");

        if (mysqli_num_rows($checkQuery) > 0) {
            // Update existing record
            $existing = mysqli_fetch_assoc($checkQuery);
            $mediaID = $existing['mediaID'];

            $update = mysqli_query($conn, "UPDATE media_six SET filePath = '$targetPath' WHERE mediaID = '$mediaID'");
            if ($update) {
                $uploadSuccess[] = "$fileName updated successfully.";
            } else {
                $uploadErrors[] = "Failed to update $fileName: " . mysqli_error($conn);
            }
        } else {
            // Insert new record
            $insert = mysqli_query($conn, "INSERT INTO media_six (serviceID, filePath) VALUES ('$serviceID', '$targetPath')");
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



//Team Member Image Query
if (isset($_POST['member_upload_btn'])) {

    $teamID = $conn->real_escape_string($_POST['teamID']);
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
        echo "<meta http-equiv='refresh' content='0; URL=edit-team?id=$teamID'>";
        exit();
    }

    // Check if entry already exists for this team member in `team` table
    $sql = mysqli_query($conn, "SELECT * FROM team WHERE teamID = '$teamID'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing team member record
        $update = mysqli_query($conn, "UPDATE team SET filePath = '$targetPath' WHERE teamID = '$teamID'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Team member image updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update team member image: " . mysqli_error($conn);
        }
    } else {
        // INSERT new team membero record
        $insert = mysqli_query($conn, "INSERT INTO team (teamID, filePath) VALUES ('$teamID', '$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Team member image uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert team member image: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=edit-team?id=$teamID'>";
    exit();
}
