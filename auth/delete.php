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
        echo "<meta http-equiv='refresh' content='0; URL=support'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error support enquiry.";
        echo "<meta http-equiv='refresh' content='0; URL=support'>";
        exit();
    }

}



// Delete Quote script
if (isset($_POST['delete_quote_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM quote WHERE quoteID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Quotation Request Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=quote'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting quote request.";
        echo "<meta http-equiv='refresh' content='0; URL=quote'>";
        exit();
    }

}



// Delete Certificate script
if (isset($_POST['delete_certificate_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM certificate WHERE certificateID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Certificate Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=certifications'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting certificate.";
        echo "<meta http-equiv='refresh' content='0; URL=certifications'>";
        exit();
    }

}



// Delete Team script
if (isset($_POST['delete_team_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM team WHERE teamID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Team Member Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=team'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting team member.";
        echo "<meta http-equiv='refresh' content='0; URL=team'>";
        exit();
    }

}



// Delete FAQ script
if (isset($_POST['delete_faq_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM faq WHERE faqID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "FAQ Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=faq'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting FAQ.";
        echo "<meta http-equiv='refresh' content='0; URL=faq'>";
        exit();
    }

}



// Delete Job script
if (isset($_POST['delete_job_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM jobs WHERE jobID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Job Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=jobs'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting Job.";
        echo "<meta http-equiv='refresh' content='0; URL=jobs'>";
        exit();
    }

}



// Delete Project Category script
if (isset($_POST['delete_project_category_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM project_categories WHERE categoryID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Project Category Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=project-categories'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting project category.";
        echo "<meta http-equiv='refresh' content='0; URL=project-categories'>";
        exit();
    }

}



// Delete Project Category script
if (isset($_POST['delete_project_btn'])) {

    $id = $_GET['id'];

    $id = $conn->real_escape_string($_POST['id']);

    $query = "DELETE FROM projects WHERE projectID = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0 ) {
        $_SESSION['success_message'] = "Project Deleted";
        echo "<meta http-equiv='refresh' content='0; URL=projects'>";
        exit();
    }else{
        $_SESSION['error_message'] = "Error deleting project.";
        echo "<meta http-equiv='refresh' content='0; URL=projects'>";
        exit();
    }

}