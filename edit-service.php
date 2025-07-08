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

                        $serviceID = $_GET['id'];
                                    
                        $select_query = "SELECT * FROM services WHERE serviceID ='$serviceID'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $serviceID = $row['serviceID'];
                                $title = $row['title'];
                                $firstParagraph = $row['firstParagraph'];
                                $secondParagraph = $row['secondParagraph'];
                                $thirdParagraph = $row['thirdParagraph'];
                                $fourthParagraph = $row['fourthParagraph'];
                                $fifthParagraph = $row['fifthParagraph'];
                                $sixthParagraph = $row['sixthParagraph'];
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
                                    <a href="services"  class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Service ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Breadcrumb Image</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="breadcrumb_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
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
                                    <button class="btn btn-dark" type="submit" name="hero_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
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
                                <label class="form-label">Section One</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="firstParagraph" id="firstParagraph" class="form-control"><?php echo $firstParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Two</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="secondParagraph" id="secondParagraph" class="form-control"><?php echo $secondParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Three</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="thirdParagraph" id="thirdParagraph" class="form-control"><?php echo $thirdParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Four</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="fourthParagraph" id="fourthParagraph" class="form-control"><?php echo $fourthParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Five</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="fifthParagraph" id="fifthParagraph" class="form-control"><?php echo $fifthParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Six</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="">
                                    <textarea rows="5" name="sixthParagraph" id="sixthParagraph" class="form-control"><?php echo $sixthParagraph; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8 text-end">
                                <button type="submit" name="update_service_btn" class="btn btn-danger text-white">Update Service <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="pb-5 pt-5 mb-5 mt-5">
                        <hr />
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">Service ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section One Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_one_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Two Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_two_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Three Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_three_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Four Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_four_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Five Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_five_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
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
                                    <input type="number" value="<?php echo $serviceID; ?>" name="serviceID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Section Six Gallery</label>
                            </div>
                            <div class="col-md-8 col-xl-8">
                                <div class="input-group">
                                    <input type="file" name="filePath[]" multiple class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
                                    <button class="btn btn-dark" type="submit" name="section_six_upload_btn" id="inputGroupFileAddon04">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>