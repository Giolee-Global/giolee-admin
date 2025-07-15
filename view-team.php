<?php
    $page = "About";
    include "./components/header.php";
    include "./components/modals.php";
    require_once "./auth/delete.php";
    require_once "./auth/update.php";
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
                                $filePath = $row['filePath'];
                            }
                        }

                    ?>

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight"><?php echo $title; ?></h3>
                            </div>
                            <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" onclick="goBack()" class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mx-auto text-center">
                            <img src="<?php echo $filePath; ?>" alt="" style="height: 28rem;width: 100%;object-fit: cover;object-position: top;border-radius: 1rem;">
                            <h5 class="mt-3"><?php echo $fullName; ?></h5>
                            <span><?php echo $designation; ?></span>
                            <div class="mt-4">
                                <a href="edit-team?id=<?php echo $teamID; ?>" class='btn btn-secondary btn-sm'>Edit <i class="bi bi-pencil"></i></a>
                                <button type="button" data-id="<? echo $teamID; ?>" onclick="confirmTeamDelete(this);" class='btn btn-danger btn-sm'>Delete <i class="bi bi-trash"></i></button>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>

<?php 
include "./components/delete-modals.php";
include "./components/footer.php"; 
?>