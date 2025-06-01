<?php
// Connect database
include "./config/db.php";

//Weekly Activity Report Query
if (isset($_POST['new_user_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['password']);
    $accountType = $conn->real_escape_string($_POST['accountType']);
    $status = $conn->real_escape_string($_POST['status']);


    $check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_message'] = "User Already Exist!";
    }else {
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstName, lastName, email, phone, password, accountType, status) 
  			        VALUES('$firstName', '$lastName', '$email', '$phone', '$password', '$accountType', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "<strong>Success!</strong> New User Created";
        }else {
            $_SESSION['error_message'] = "Error creating new user".mysqli_error($conn);
        }
    }
}
