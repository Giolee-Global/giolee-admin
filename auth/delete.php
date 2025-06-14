<?php
// Connect database
include "./config/db.php";


// Delete Admin script
if (isset($_POST['delete_admin_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM admin WHERE adminID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Admin Account Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting admin account.";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }

}



// Delete Support script
if (isset($_POST['delete_support_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM support WHERE supportID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Support Enquiry Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error support enquiry.";
        echo "<meta http-equiv='refresh' content='0; URL=admins'>";
        exit();
    }

}