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
