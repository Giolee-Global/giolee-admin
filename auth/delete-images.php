<?php

if (isset($_POST['delete_gallery_image_btn_six'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_six WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_five'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_five WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}




if (isset($_POST['delete_gallery_image_btn_four'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_four WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}




if (isset($_POST['delete_gallery_image_btn_three'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_three WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_two'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media_two WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}



if (isset($_POST['delete_gallery_image_btn_one'])) {
    $mediaID = $_POST['gallery_image_id'];
    $filePath = $_POST['filePath'];

    $uploadDir = __DIR__ . '/'; // adjust if needed
    $fullPath = $uploadDir . $filePath;

    // Debug (optional)
    // echo $fullPath;

    if (file_exists($fullPath)) {
        unlink($fullPath); // delete image from upload folder
    }

    // delete from database
    $delete_query = "DELETE FROM media WHERE mediaID = ?";
    $stmt = mysqli_prepare($conn, $delete_query);
    mysqli_stmt_bind_param($stmt, 'i', $mediaID);
    mysqli_stmt_execute($stmt);

    // redirect to refresh
    $_SESSION['success_message'] = "Image Deleted";
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}