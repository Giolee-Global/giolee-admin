<?php
// Connect database
include "./config/db.php";

//Create New Admin Query
if (isset($_POST['new_admin_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $designation = $conn->real_escape_string($_POST['designation']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_query = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        $password = sha1('123456');//encrypt the password before saving in the database
        $query = "INSERT INTO admin (firstName, lastName, email, password, designation, status) 
  			        VALUES('$firstName', '$lastName', '$email', '$password', '$designation', '1')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "New Admin Created";
        }else {
            $_SESSION['error_message'] = "Error creating new admin".mysqli_error($conn);
        }
    }
}

//Add New Certificate Query
if (isset($_POST['new_certifiate_btn'])) {

    $title = $conn->real_escape_string($_POST['title']);
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
        echo "<meta http-equiv='refresh' content='0; URL=certifications'>";
        exit();
    }

    // Check if entry already exists table
    $sql = mysqli_query($conn, "SELECT * FROM certificate WHERE title = '$title'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing certificate record
        $update = mysqli_query($conn, "UPDATE certificate SET title = '$title', filePath = '$targetPath' WHERE title = '$title'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Certificate updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update certificate: " . mysqli_error($conn);
        }
    } else {
        // INSERT new certificate record
        $insert = mysqli_query($conn, "INSERT INTO certificate (title, filePath) VALUES ('$title', '$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Certificate uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert certificate: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=certifications'>";
    exit();
}

//Add New Team Member Query
if (isset($_POST['new_team_btn'])) {

    $fullName = $conn->real_escape_string($_POST['fullName']);
    $designation = $conn->real_escape_string($_POST['designation']);
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
        echo "<meta http-equiv='refresh' content='0; URL=certifications'>";
        exit();
    }

    // Check if entry already exists table
    $sql = mysqli_query($conn, "SELECT * FROM team WHERE fullName = '$fullName'");
    $result = mysqli_fetch_array($sql);

    if ($result) {
        // UPDATE existing team member record
        $update = mysqli_query($conn, "UPDATE team SET fullName = '$fullName', designation = '$designation', filePath = '$targetPath' WHERE fullName = '$fullName'");

        if ($update) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Team member updated successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to update team member: " . mysqli_error($conn);
        }
    } else {
        // INSERT new team member record
        $insert = mysqli_query($conn, "INSERT INTO team (fullName, designation, filePath) VALUES ('$fullName', '$designation', '$targetPath')");

        if ($insert) {
            copy($fileTmp, $targetPath);
            $_SESSION['success_message'] = "Team member uploaded successfully.";
        } else {
            $_SESSION['error_message'] = "Failed to insert team member: " . mysqli_error($conn);
        }
    }

    // Redirect back
    echo "<meta http-equiv='refresh' content='0; URL=team'>";
    exit();
}


//Create New FAQ Query
if (isset($_POST['new_faq_btn'])) {

    $question = $conn->real_escape_string($_POST['question']);
    $answer = $conn->real_escape_string($_POST['answer']);


    $check_query = "SELECT * FROM faq WHERE question='$question'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "FAQ Already Exist!";
    }else {
        $query = "INSERT INTO faq (question, answer) 
  			        VALUES('$question', '$answer')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "New FAQ Created";
        }else {
            $_SESSION['error_message'] = "Error creating new FAQ".mysqli_error($conn);
        }
    }
}