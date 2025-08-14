    <!-- Create new admin modal start-->
    <div class="modal fade" id="createNewAdminModal" tabindex="-1" aria-labelledby="createNewAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewAdminModalLabel">Create New Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">
                <div class="row g-5 mt-3 mb-2">
                    <div class="col-sm-6 mx-auto">
                        <div class="alert alert-danger" role="alert">Default Password: <b>123456</b></div>
                    </div>
                </div>

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-6">
                                <label class="form-label">First name</label> 
                                <input type="text" name="firstName" required class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Last name</label> 
                                <input type="text" name="lastName" required class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12 mb-5">
                            <label class="form-label" for="email">Email address</label> 
                            <input type="email" name="email" required class="form-control" id="email">
                        </div>

                        <div class="col-sm-12 mb-5">
                            <label class="form-label">Designation</label> 
                            <select class="form-select" name="designation" required aria-label="Designation">
                                <option selected disabled>Select Designation</option>
                                <option>Admin</option>
                                <option>Super-Admin</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-2">
                            <button type="submit" name="new_admin_btn" class="btn btn-dark w-100">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new admin modal end-->


    <!-- Create new certificate modal start-->
    <div class="modal fade" id="createNewCertificateModal" tabindex="-1" aria-labelledby="createNewCertificateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewCertficateModalLabel">Add New Certificate</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-12">
                                <label class="form-label">Certificate Title</label> 
                                <input type="text" name="title" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Upload Certificate</label> 
                                <input type="file" name="filePath" required class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" name="new_certifiate_btn" class="btn btn-dark w-100">Add new Certificate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new certificate modal end-->


    <!-- Create new team modal start-->
    <div class="modal fade" id="createNewTeamModal" tabindex="-1" aria-labelledby="createNewTeamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewTeamModalLabel">Add New Team Member</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-12">
                                <label class="form-label">Full Name</label> 
                                <input type="text" name="fullName" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Designation</label> 
                                <input type="text" name="designation" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Upload Photograph</label> 
                                <input type="file" name="filePath" required class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" name="new_team_btn" class="btn btn-dark w-100">Add new team member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new team modal end-->


    <!-- Create new faq modal start-->
    <div class="modal fade" id="createNewFaqModal" tabindex="-1" aria-labelledby="createNewFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewFaqModalLabel">Add New FAQ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-12">
                                <label class="form-label">Question</label> 
                                <textarea rows="2" name="question" required class="form-control"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Designation</label> 
                                <textarea rows="5" name="answer" required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" name="new_faq_btn" class="btn btn-dark w-100">Add New FAQ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new faq modal end-->


    <!-- Create new project category modal start-->
    <div class="modal fade" id="createNewProjectCategoryModal" tabindex="-1" aria-labelledby="createNewProjectCategoryModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewProjectCategoryModal">Add New Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-12">
                                <label class="form-label">Title</label> 
                                <input type="text" name="title" required class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <button type="submit" name="new_project_category_btn" class="btn btn-dark w-100">Add new Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new project category modal end-->



    <!-- Create new project modal start-->
    <div class="modal fade" id="createNewProjectModal" tabindex="-1" aria-labelledby="createNewProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="createNewProjectModalLabel">Add New Project</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">

                <div class="modal-body undefined">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row g-5 mb-5">
                            <div class="col-sm-12">
                                <label class="form-label">Title</label> 
                                <input type="text" name="title" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Project Category</label>
                                <select class="form-select" name="projectCategoryID" required aria-label="Project">
                                    <?php
                                    $select_query = "SELECT * FROM project_categories";
                                    $result = mysqli_query($conn, $select_query);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                            $categoryID = $row['categoryID'];
                                            $title = $row['title'];
                                    ?>
                                    <option value="<?php echo $categoryID;?>"><?php echo $title; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Client</label> 
                                <input type="text" name="client" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Project Date</label> 
                                <input type="date" name="projectDate" required class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label class="form-label">Upload Hero Banner</label> 
                                <input type="file" name="filePath" required class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 mt-5">
                            <button type="submit" name="new_project_btn" class="btn btn-dark w-100">Add new project</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Create new project modal end-->