<?php
    $page = "Jobs";
    include "./components/header.php";
    include "./components/modals.php";
    require_once "./auth/queries.php";
    require_once "./auth/delete.php";
?>
    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>
        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <div class="mb-6 mb-xl-10">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h3 class="ls-tight">Jobs</h3>
                            </div>
                            <div class="col">
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="create-job" class="btn btn-sm btn-dark d-sm-inline-flex"><span class="pe-2"><i class="bi bi-plus-circle"></i> </span><span>Add New Job</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="table-responsive mb-10 mt-5">
                                            <table id="admins" class="table table-hover table-striped table-sm table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            <div class="d-flex align-items-center gap-2 ps-1">
                                                                <span>Job Title</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="align-items-center">
                                                                <span>Status</span>
                                                            </div>
                                                        </th>
                                                        <th scope="col" class="d-none text-end d-xl-table-cell">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $admin_id = 1;
                                                    $select_query = "SELECT * FROM jobs ORDER BY jobID ASC";
                                                    $result = mysqli_query($conn, $select_query);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $jobID = $row['jobID'];
                                                            $title = $row['title'];
                                                            $status = $row['status'];
                                                            $dateCreated = $row['dateCreated'];
                                                            $date = strtotime($dateCreated);
                                                            switch ($status) {
                                                                case "Closed";
                                                                    $class  = 'bg-danger';
                                                                    $text = 'text-danger';
                                                                    break;
                                                                case "Open";
                                                                    $class  = 'bg-success';
                                                                    $text = 'text-success';
                                                                    break;
                                                                default:
                                                                    $class  = '';
                                                            }
                                                    ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center gap-3 ps-1">
                                                                        <div class="icon icon-shape w-rem-10 h-rem-10 rounded-circle text-sm bg-dark bg-opacity-10 text-dark"><i class="bi bi-person-workspace"></i></div>
                                                                        <div><span class="d-block text-heading fw-bold"><?php echo $title; ?></span></div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="badge <? echo $class; ?> bg-opacity-25 text-xs <? echo $text; ?>"><?php echo $status; ?></span></td>
                                                                <td class="text-end">
                                                                    <a href="view-job?id=<?php echo $jobID; ?>" class='btn btn-dark btn-sm'>View <i class="bi bi-eye"></i></a>
                                                                    <a href="edit-job?id=<?php echo $jobID; ?>" class='btn btn-secondary btn-sm'>Edit <i class="bi bi-pencil-square"></i></a>
                                                                    <button type="button" data-id="<? echo $jobID; ?>" onclick="confirmJobDelete(this);" class='btn btn-danger btn-sm'>Delete <i class="bi bi-trash"></i></button>
                                                                </td>
                                                            </tr>
                                                    <?php
                                                            $admin_id++;
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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