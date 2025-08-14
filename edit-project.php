<?php
    $page = "Projects";
    include "./components/header.php";
    require_once "./auth/update.php";
    require_once "./auth/file.php";
    require_once "./auth/delete-images.php";
    
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <?php

                        $projectID = mysqli_real_escape_string($conn, $_GET['id']);

                        $select_query = "SELECT * FROM projects WHERE projectID ='$projectID'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $projectID = $row['projectID'];
                                $title = $row['title'];
                                $client = $row['client'];
                                $projectDate = $row['projectDate'];
                                $projectCategoryID = $row['projectCategoryID'];
                                $location = $row['location'];
                                $description = $row['description'];
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
                                    <a href="projects"  class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Project ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $projectID; ?>" name="projectID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Hero Image</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="project_hero_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Project ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $projectID; ?>" name="projectID" class="form-control">
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
                                <label class="form-label">Client</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $client; ?>" name="client" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Project Date</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="date" value="<?php echo $projectDate; ?>" name="projectDate" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Location</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <input type="text" value="<?php echo $location; ?>" name="location" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Title</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <select class="form-select" name="projectCategoryID" required aria-label="Project">
                                        <?php
                                            $select_query = "SELECT * FROM project_categories";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $selected = ($row['categoryID'] == $projectCategoryID) ? 'selected' : '';
                                                    echo '<option value="' . $row['categoryID'] . '" ' . $selected . '>' . $row['title'] . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Description</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="description" id="description" class="form-control"><?php echo $description; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_project_btn" class="btn btn-danger text-white">Update Project <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="pb-5 pt-5 mb-5 mt-5">
                        <hr />
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Project ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $projectID; ?>" name="projectID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="project-gallery_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                        $query = "SELECT * FROM project_media WHERE projectID = '$projectID'";
                        $gallery_result = mysqli_query($conn, $query);

                        if (!$gallery_result) {
                            die("Query failed: " . mysqli_error($conn));
                        }
                    ?>
                    <div class="d-flex flex-wrap gap-3 mb-10">
                        <?php while ($img = mysqli_fetch_assoc($gallery_result)) : ?>
                            <div style="width: 180px;" class="text-center">
                                <img src="<?php echo $img['filePath']; ?>" class="img-fluid rounded" style="height: 150px; width: 100%; object-fit: cover;">
                                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                                    <input type="hidden" name="gallery_image_id" value="<?php echo $img['projectMediaID']; ?>">
                                    <input type="hidden" name="filePath" value="<?php echo $img['filePath']; ?>">
                                    <button class="btn btn-sm btn-danger mt-2" type="submit" name="delete_project_gallery_image_btn"><i class='bi bi-trash3-fill'></i></button>
                                </form>
                            </div>
                        <?php endwhile; ?>
                    </div>

                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>