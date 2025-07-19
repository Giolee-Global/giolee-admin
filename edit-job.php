<?php
    $page = "Jobs";
    include "./components/header.php";
    require_once "./auth/update.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <?php

                        $jobID = $_GET['id'];
                                    
                        $select_query = "SELECT * FROM jobs WHERE jobID ='$jobID'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $jobID = $row['jobID'];
                                $title = $row['title'];
                                $jobSummary = $row['jobSummary'];
                                $mainTasks = $row['mainTasks'];
                                $jobSpecification = $row['jobSpecification'];
                                $status = $row['status'];
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
                                    <a href="jobs"  class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Job ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $jobID; ?>" name="jobID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $title; ?>" name="title" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Job Summary</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="jobSummary" id="jobSummary" class="form-control"><?php echo $jobSummary; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Main Tasks</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="mainTasks" id="mainTasks"  class="form-control"><?php echo $mainTasks; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Job Specification</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="jobSpecification" id="jobSpecification" class="form-control"><?php echo $jobSpecification; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Status</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <select class="form-select" name="status" required aria-label="status">
                                        <option selected value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                        <option>Open</option>
                                        <option>Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_job_btn" class="btn btn-danger text-white">Update Job <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>