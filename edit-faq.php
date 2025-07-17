<?php
    $page = "About";
    include "./components/header.php";
    include "./components/modals.php";
    require_once "./auth/update.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <?php

                        $faqID = $_GET['id'];
                                    
                        $select_query = "SELECT * FROM faq WHERE faqID ='$faqID'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $faqID = $row['faqID'];
                                $question = $row['question'];
                                $answer = $row['answer'];
                            }
                        }

                    ?>

                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Edit Frequently Asked Question</h3>
                            </div>
                            <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="faq" class="btn btn-sm btn-neutral d-sm-inline-flex"><span class="pe-2"><i class="bi bi-arrow-left"></i> </span><span>Go Back</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="row align-items-center mb-10" style="display: none;">
                            <div class="col-md-2">
                                <label class="form-label">FAQ ID</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <input type="number" value="<?php echo $faqID; ?>" name="faqID" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Question</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <textarea class="form-control" name="question" rows="2"><?php echo $question; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-10">
                            <div class="col-md-2">
                                <label class="form-label">Answer</label>
                            </div>
                            <div class="col-md-8 col-xl-5">
                                <div class="">
                                    <textarea class="form-control" name="answer" rows="5"><?php echo $answer; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5 text-end">
                                <button type="submit" name="update_faq_btn" class="btn btn-dark">Update FAQ</button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include "./components/footer.php"; ?>