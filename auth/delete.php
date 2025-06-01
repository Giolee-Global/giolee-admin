<?php
// Connect database
include "./config/db.php";


// Delete User script
if (isset($_POST['delete_user_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "User Account Deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting user account.";
    }

}


// Delete Property script
if (isset($_POST['delete_property_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM properties WHERE property_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Property deleted";
    }else{
        $_SESSION['error_message'] = "Error deleting property".mysqli_error($conn);
    }

}