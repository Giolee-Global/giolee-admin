<?php
// Connect database
include "./config/db.php";
    

    //Update Admin Query
    if (isset($_POST['update_admin_btn'])) {

        $adminID = isset($_GET['adminID']) ? $_GET['adminID'] : '';

        $adminID = $conn->real_escape_string($_POST['adminID']);
        $firstName = $conn->real_escape_string($_POST['firstName']);
        $lastName = $conn->real_escape_string($_POST['lastName']);
        $email = $conn->real_escape_string($_POST['email']);
        $designation = $conn->real_escape_string($_POST['designation']);
        $status = $conn->real_escape_string($_POST['status']);


        $sql=mysqli_query($conn,"SELECT * FROM admin where adminID='$adminID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE admin SET firstName='$firstName', lastName='$lastName', email='$email', designation='$designation', status='$status' WHERE adminID='$adminID'");

            $_SESSION['success_message'] = "Admin account updated 👍";
            echo "<meta http-equiv='refresh' content='0; URL=edit-admin?id=$adminID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating account".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=edit-admin?id=$adminID'>";
            exit();

        }

    }


    //Update Admin Password Query
    if (isset($_POST['update_admin_password_btn'])) {

        $adminID = isset($_GET['adminID']) ? $_GET['adminID'] : '';

        $adminID = $conn->real_escape_string($_POST['adminID']);
        $password = $conn->real_escape_string($_POST['password']);


        $sql=mysqli_query($conn,"SELECT * FROM admin where adminID='$adminID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $password = sha1('123456');
            $conn=mysqli_query($conn,"UPDATE admin SET password='$password' WHERE adminID='$adminID'");

            $_SESSION['success_message'] = "Admin password changed to default";
            echo "<meta http-equiv='refresh' content='0; URL=edit-admin?id=$adminID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error changing password".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=edit-admin?id=$adminID'>";
            exit();

        }

    }



    //Update Support Query
    if (isset($_POST['update_support_btn'])) {

        $supportID = isset($_GET['supportID']) ? $_GET['supportID'] : '';

        $supportID = $conn->real_escape_string($_POST['supportID']);
        $status = $conn->real_escape_string($_POST['status']);


        $sql=mysqli_query($conn,"SELECT * FROM support where supportID='$supportID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE support SET status='Closed' WHERE supportID='$supportID'");

            $_SESSION['success_message'] = "Support Enquiry Closed";
            echo "<meta http-equiv='refresh' content='0; URL=view-support?id=$supportID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error closing support enquiry".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=view-support?id=$supportID'>";
            exit();

        }

    }


    //Update Quote Query
    if (isset($_POST['update_quote_btn'])) {

        $quoteID = isset($_GET['quoteID']) ? $_GET['quoteID'] : '';

        $quoteID = $conn->real_escape_string($_POST['quoteID']);
        $status = $conn->real_escape_string($_POST['status']);


        $sql=mysqli_query($conn,"SELECT * FROM quote where quoteID='$quoteID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE quote SET status='Closed' WHERE quoteID='$quoteID'");

            $_SESSION['success_message'] = "Quote Request Closed";
            echo "<meta http-equiv='refresh' content='0; URL=view-quote?id=$quoteID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error closing quote request".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=view-quote?id=$quoteID'>";
            exit();

        }

    }



    //Update Service Query
    if (isset($_POST['update_service_btn'])) {

        $serviceID = isset($_GET['serviceID']) ? $_GET['serviceID'] : '';

        $serviceID = $conn->real_escape_string($_POST['serviceID']);
        $title = $conn->real_escape_string($_POST['title']);
        $firstParagraph = $conn->real_escape_string($_POST['firstParagraph']);
        $secondParagraph = $conn->real_escape_string($_POST['secondParagraph']);
        $thirdParagraph = $conn->real_escape_string($_POST['thirdParagraph']);
        $fourthParagraph = $conn->real_escape_string($_POST['fourthParagraph']);
        $fifthParagraph = $conn->real_escape_string($_POST['fifthParagraph']);
        $sixthParagraph = $conn->real_escape_string($_POST['sixthParagraph']);


        $sql=mysqli_query($conn,"SELECT * FROM services where serviceID='$serviceID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE services SET title='$title', firstParagraph='$firstParagraph', secondParagraph='$secondParagraph', thirdParagraph='$thirdParagraph', fourthParagraph='$fourthParagraph', fifthParagraph='$fifthParagraph', sixthParagraph='$sixthParagraph'  WHERE serviceID='$serviceID'");

            $_SESSION['success_message'] = "Service Updated";
            echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating service".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=edit-service?id=$serviceID'>";
            exit();

        }

    }



    //Update Team Member Profile Query
    if (isset($_POST['update_profile_btn'])) {

        $teamID = isset($_GET['teamID']) ? $_GET['teamID'] : '';

        $teamID = $conn->real_escape_string($_POST['teamID']);
        $fullName = $conn->real_escape_string($_POST['fullName']);
        $designation = $conn->real_escape_string($_POST['designation']);


        $sql=mysqli_query($conn,"SELECT * FROM team where teamID='$teamID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE team SET fullName='$fullName', designation='$designation' WHERE teamID='$teamID'");

            $_SESSION['success_message'] = "Team Member Profile Updated";
            echo "<meta http-equiv='refresh' content='0; URL=edit-team?id=$teamID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating team member's profile".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=edit-team?id=$teamID'>";
            exit();

        }

    }



    //Update FAQ Query
    if (isset($_POST['update_faq_btn'])) {

        $faqID = isset($_GET['faqID']) ? $_GET['faqID'] : '';

        $faqID = $conn->real_escape_string($_POST['faqID']);
        $question = $conn->real_escape_string($_POST['question']);
        $answer = $conn->real_escape_string($_POST['answer']);


        $sql=mysqli_query($conn,"SELECT * FROM faq where faqID='$faqID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE faq SET question='$question', answer='$answer' WHERE faqID='$faqID'");

            $_SESSION['success_message'] = "FAQ Updated";
            echo "<meta http-equiv='refresh' content='0; URL=edit-faq?id=$faqID'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating FAQ".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=edit-faq?id=$faqID'>";
            exit();

        }

    }


    //Update About Quote Section Query
    if (isset($_POST['update_about_quote_btn'])) {

        $aboutID = isset($_GET['aboutID']) ? $_GET['aboutID'] : '';

        $aboutID = $conn->real_escape_string($_POST['aboutID']);
        $quoteTitle = $conn->real_escape_string($_POST['quoteTitle']);
        $quote = $conn->real_escape_string($_POST['quote']);


        $sql=mysqli_query($conn,"SELECT * FROM about where aboutID='$aboutID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE about SET quoteTitle='$quoteTitle', quote='$quote' WHERE aboutID='$aboutID'");

            $_SESSION['success_message'] = "Quote Updated";
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating quote".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }

    }


    //Update About Section One Query
    if (isset($_POST['update_about_sectionOne_btn'])) {

        $aboutID = isset($_GET['aboutID']) ? $_GET['aboutID'] : '';

        $aboutID = $conn->real_escape_string($_POST['aboutID']);
        $sectionOneTitle = $conn->real_escape_string($_POST['sectionOneTitle']);
        $sectionOneSubTitle = $conn->real_escape_string($_POST['sectionOneSubTitle']);
        $sectionOneText = $conn->real_escape_string($_POST['sectionOneText']);


        $sql=mysqli_query($conn,"SELECT * FROM about where aboutID='$aboutID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE about SET sectionOneTitle='$sectionOneTitle', sectionOneSubTitle='$sectionOneSubTitle', sectionOneText='$sectionOneText' WHERE aboutID='$aboutID'");

            $_SESSION['success_message'] = "Section One Updated";
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating section one".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }

    }


    //Update About Section Two Query
    if (isset($_POST['update_about_sectionTwo_btn'])) {

        $aboutID = isset($_GET['aboutID']) ? $_GET['aboutID'] : '';

        $aboutID = $conn->real_escape_string($_POST['aboutID']);
        $sectionTwoTitle = $conn->real_escape_string($_POST['sectionTwoTitle']);
        $sectionTwoText = $conn->real_escape_string($_POST['sectionTwoText']);


        $sql=mysqli_query($conn,"SELECT * FROM about where aboutID='$aboutID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE about SET sectionTwoTitle='$sectionTwoTitle', sectionTwoText='$sectionTwoText' WHERE aboutID='$aboutID'");

            $_SESSION['success_message'] = "Section Two Updated";
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating section two".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }

    }


    //Update About Section Three Query
    if (isset($_POST['update_about_sectionThree_btn'])) {

        $aboutID = isset($_GET['aboutID']) ? $_GET['aboutID'] : '';

        $aboutID = $conn->real_escape_string($_POST['aboutID']);
        $sectionThreeText = $conn->real_escape_string($_POST['sectionThreeText']);
        $sectionThreeSubTextOne = $conn->real_escape_string($_POST['sectionThreeSubTextOne']);
        $sectionThreeSubTextTwo = $conn->real_escape_string($_POST['sectionThreeSubTextTwo']);
        $sectionThreeSubTextThree = $conn->real_escape_string($_POST['sectionThreeSubTextThree']);


        $sql=mysqli_query($conn,"SELECT * FROM about where aboutID='$aboutID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE about SET sectionThreeText='$sectionThreeText', sectionThreeSubTextOne='$sectionThreeSubTextOne', sectionThreeSubTextTwo='$sectionThreeSubTextTwo', sectionThreeSubTextThree='$sectionThreeSubTextThree' WHERE aboutID='$aboutID'");

            $_SESSION['success_message'] = "Section Three Updated";
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating section three".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }

    }


    //Update About Section Four Query
    if (isset($_POST['update_about_sectionFour_btn'])) {

        $aboutID = isset($_GET['aboutID']) ? $_GET['aboutID'] : '';

        $aboutID = $conn->real_escape_string($_POST['aboutID']);
        $sectionFourSubTitle = $conn->real_escape_string($_POST['sectionFourSubTitle']);
        $sectionFourText = $conn->real_escape_string($_POST['sectionFourText']);


        $sql=mysqli_query($conn,"SELECT * FROM about where aboutID='$aboutID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE about SET sectionFourSubTitle='$sectionFourSubTitle', sectionFourText='$sectionFourText' WHERE aboutID='$aboutID'");

            $_SESSION['success_message'] = "Section Four Updated";
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating section four".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=about'>";
            exit();

        }

    }


    //Update CEO Quote Section Query
    if (isset($_POST['update_ceo_quote_btn'])) {

        $ceoID = isset($_GET['ceoID']) ? $_GET['ceoID'] : '';

        $ceoID = $conn->real_escape_string($_POST['ceoID']);
        $quoteTitle = $conn->real_escape_string($_POST['quoteTitle']);
        $quote = $conn->real_escape_string($_POST['quote']);


        $sql=mysqli_query($conn,"SELECT * FROM ceo where ceoID='$ceoID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE ceo SET quoteTitle='$quoteTitle', quote='$quote' WHERE ceoID='$ceoID'");

            $_SESSION['success_message'] = "Quote Updated";
            echo "<meta http-equiv='refresh' content='0; URL=ceo'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating quote".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=cep'>";
            exit();

        }

    }


    //Update CEO Section One Query
    if (isset($_POST['update_ceo_sectionOne_btn'])) {

        $ceoID = isset($_GET['ceoID']) ? $_GET['ceoID'] : '';

        $ceoID = $conn->real_escape_string($_POST['ceoID']);
        $title = $conn->real_escape_string($_POST['title']);
        $subTitle = $conn->real_escape_string($_POST['subTitle']);
        $text = $conn->real_escape_string($_POST['text']);


        $sql=mysqli_query($conn,"SELECT * FROM ceo where ceoID='$ceoID'");
        $result=mysqli_fetch_array($sql);
        if($result>0){
            $conn=mysqli_query($conn,"UPDATE ceo SET title='$title', subTitle='$subTitle', text='$text' WHERE ceoID='$ceoID'");

            $_SESSION['success_message'] = "Section One Updated";
            echo "<meta http-equiv='refresh' content='0; URL=ceo'>";
            exit();

        }else {

            $_SESSION['error_message'] = "Error updating section one".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='0; URL=ceo'>";
            exit();

        }

    }