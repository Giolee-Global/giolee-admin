<?php
    $page = "Admins";
    include "./components/header.php";
    require_once "./auth/update.php";
    require_once "./auth/file.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <?php

                        $teamID = $_GET['id'];
                                    
                        $select_query = "SELECT * FROM team WHERE teamID ='$teamID'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $teamID = $row['teamID'];
                                $fullName = $row['fullName'];
                                $designation = $row['designation'];
                            }
                        }

                    ?>

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Member's Profile</h3>
                            </div>
                            <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="team"  class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Team ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $teamID; ?>" name="teamID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Team Member Photograph</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="member_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Service ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $teamID; ?>" name="teamID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Full Name</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $fullName; ?>" name="fullName" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Designation</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $designation; ?>" name="designation" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_profile_btn" class="btn btn-danger text-white">Update Profile <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>