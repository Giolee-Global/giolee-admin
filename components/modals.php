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


    <!-- View Customized Plan Feature modal end-->
    <div class="modal fade" id="customizedPlanModal" tabindex="-1" aria-labelledby="customizedPlanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="customizedPlanModalLabel">Customized Plan Features</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">
                <div class="modal-body undefined">
                    <p class="fw-bold">This plan gives access to the following:</p>
                    <ul class="list-unstyled mt-0">
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Custom-made meal plan </p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Two 1-on-1 consultation session</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Weekly followup</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Newsletters & podcast</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Recipe videos</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-warning-subtle text-warning me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>20% discount on renewal</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- View Customized Plan Feature modal end-->


    <!-- View Coaching Plan Feature modal end-->
    <div class="modal fade" id="coachingPlanModal" tabindex="-1" aria-labelledby="coachingPlanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="coachingPlanModalLabel">Nutrition Coaching Features</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">
                <div class="modal-body undefined">
                    <p class="fw-bold">This plan gives access to the following:</p>
                    <ul class="list-unstyled mt-0">
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Custom-made meal plan</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>1-on-1 meal prep training</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Two 1-on-1 consultation session</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Weekly followup</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Newsletters & podcast</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>Recipe videos</p>
                        </li>
                        <li class="py-2 d-flex align-items-center">
                            <div class="icon icon-xs text-base icon-shape rounded-circle bg-success-subtle text-success me-3">
                                <i class="bi bi-check"></i>
                            </div>
                            <p>20% discount on renewal</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- View Coaching Plan Feature modal end-->


    <!-- --------------------------------------------- -->


    <!-- View Coaching Plan Feature modal end-->
    <div class="modal fade" id="mondayMealPlanModal" tabindex="-1" aria-labelledby="mondayMealPlanModal" aria-hidden="false">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="mondayMealPlanModal">Monday Meal Plan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="mb-0">
                <div class="modal-body undefined">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label mb-0">Breakfast</label>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex mb-5">
                                <div>
                                    <label class="form-label mb-0" for="check_notification_1">ROLLED OATS AND AKARA</label>
                                    <p class="text-sm text-muted">CAL-409 F-13g C- 54g P-19g</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label mb-0">Lunch</label>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex mb-5">
                                <div>
                                    <label class="form-label mb-0" for="check_notification_1">VEGETABLE BULGUR AND CHICKEN BREAST</label>
                                    <p class="text-sm text-muted">CAL- 482 F-14g C-48g P- 41g</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label mb-0">Snack</label>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex mb-5">
                                <div>
                                    <label class="form-label mb-0" for="check_notification_1">MULTIGRAIN CHEERIOS AND BOILED EGG</label>
                                    <p class="text-sm text-muted">CAL-181 F-9g C-11g P- 14g</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label mb-0">Dinner</label>
                        </div>
                        <div class="col-md-5">
                            <div class="d-flex mb-5">
                                <div>
                                    <label class="form-label mb-0" for="check_notification_1">KALE SALAD</label>
                                    <p class="text-sm text-muted">CAL-422 F-18g C-37g P- 28g</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View Coaching Plan Feature modal end-->


    <!-- Basic Subscription Plan modal start-->
    <div class="modal fade" id="basicSubscriptionModal" tabindex="-1" aria-labelledby="basicSubscriptionModal" aria-hidden="false">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content overflow-hidden">
                <div class="modal-header pb-0 border-0">
                    <h1 class="modal-title h4" id="topUpModalLabel">Basic Plan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body undefined">
                    <form class="vstack gap-8" id="paymentForm">
                        <div>
                            <label class="form-label">Select Diet Plan</label>
                            <div class="justify-content-between p-4 bg-body-tertiary border rounded">

                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="userID" value="<?php echo $_SESSION['user_id']; ?>" />
                                </div>
                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="first_name" value="<?php echo $_SESSION['first_name']; ?>" />
                                </div>
                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="last_name" value="<?php echo $_SESSION['last_name']; ?>" />
                                </div>
                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="email" value="<?php echo $_SESSION['email']; ?>" />
                                </div>
                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="subscription_plan" value="Basic Plan" />
                                </div>

                                <div class="form-floating mb-3" style="display: none">
                                    <input type="text" class="form-control" id="amount" value="20000" />
                                </div>

                                <div class="form-floating">
                                    <label class="visually-hidden">Diet</label>
                                    <select class="form-select" id="diet">
                                        <?php
                                        $select_query = "SELECT * FROM basic_diet ORDER BY diet_id ASC";
                                        $result = mysqli_query($conn, $select_query);
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $diet_id = $row['diet_id'];
                                                $title = $row['title'];
                                                $price = $row['price'];
                                        ?>
                                                <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="vstack gap-2">
                                <div class="text-center">
                                    <button type="submit" onclick="payWithPaystack()" class="btn btn-primary w-100">Proceed To Payments</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Subscription Plan modal end-->