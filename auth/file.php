<?php
// Connect database
include "./config/db.php";

//Breadcrumb Query
if (isset($_POST['breadcrumb_upload_btn'])) {

    $serviceID = $conn->real_escape_string($_POST['serviceID']);
    $filePath_path = $conn->real_escape_string('upload/'.$_FILES['filePath']['name']);



    if (file_exists($filePath_path)){
        $filePath_path = $conn->real_escape_string('upload/'.uniqid().rand().$_FILES['filePath']['name']);
    }

    $checker = 0;

    //make sure file type is image
    if (preg_match("!image!", $_FILES['filePath']['type'])) {
        $checker ++;
    }
    if ($checker < 1){
        exit;
    }

    $query = "INSERT INTO media (serviceID, filePath) 
                VALUES('$serviceID', '$filePath_path')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

        //copy image to upload folder
        copy($_FILES['filePath']['tmp_name'], $filePath_path);
    
        $_SESSION['success_message'] = "Breadcrumb Image Uploaded";
    }else {
        $_SESSION['error_message'] = "Error uploading breadcrumb image".mysqli_error($conn);
    }

}
