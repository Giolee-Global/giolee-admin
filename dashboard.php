<?php
$page = "Dashboard";
include "./components/header.php";
include "./components/modals.php";
?>

    <div class="d-flex flex-column flex-lg-row h-lg-100 gap-1">
        <?php include "./components/side-nav.php"; ?>

        <div class="flex-lg-fill overflow-x-auto ps-lg-1 vstack vh-lg-100 position-relative">
            <?php include "./components/topnav.php"; ?>
            <div class="flex-fill overflow-y-lg-auto scrollbar bg-body rounded-top-4 rounded-top-start-lg-4 rounded-top-end-lg-0 border-top border-lg shadow-2">
                <main class="container-fluid px-3 py-5 p-lg-6 p-xxl-8">
                    <div class="mb-6 mb-xl-10">
                        <div class="row align-items-center">
                            <div class="container">
                                <h3 class="ls-tight">Hey, <?php echo $_SESSION['firstName']; ?></h3>
                                <h5 class="text-dark mt-0 lead" id="greet"></h5>
                            </div>
                            <div class="d-flex">
                                <h2 class="ls-tight"></h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row g-3 g-xxl-6">
                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row row-cols-xl-4 g-3 g-xl-6">
                                    <div class="col">
                                        <div class="card">
                                            <div class="p-4 mb-5">
                                                <h6 class="text-limit text-muted fw-normal mb-5">Website Traffic</h6>
                                                <span class="d-block h2 ls-tight fw-bold">25.040,00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card">
                                            <div class="p-4 mb-5">
                                                <h6 class="text-limit text-muted fw-normal mb-5">Website Traffic</h6>
                                                <span class="d-block h2 ls-tight fw-bold">25.040,00</span>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-12">
                            <div class="vstack gap-3 gap-md-6">
                                <div class="row g-3 g-xl-6">
                                    <div class="col-xl-5">
                                        <div class="card">
                                            <div class="card-body pb-3">
                                                <h5 class="mb-3">Asset Allocation</h5>
                                                <div class="list-group list-group-flush">
                                                    <div class="list-group-item d-flex align-items-center border-0 py-3">
                                                        <div class="flex-none w-rem-10 h-rem-10">
                                                            <img src="../img/crypto/icon/btc.svg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="flex-fill ms-4 text-limit">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <a href="#" class="d-block text-sm text-heading fw-bold">Bitcoin</a> 
                                                                <span class="text-muted text-xs fw-semibold">47%</span>
                                                            </div>
                                                            <div class="progress progress-sm my-1">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width:47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="d-flex justify-content-between text-xs text-muted text-end mt-1">
                                                                <div>
                                                                    <span class="font-weight-bold text-muted">Price: $0.32</span>
                                                                </div>
                                                                <div>
                                                                    <p class="card-text text-muted">
                                                                        <time datetime="2020-06-23">Value: $$23,000.00</time>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-end ms-7">
                                                            <div class="dropdown">
                                                                <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="#!" class="dropdown-item">Action </a>
                                                                    <a href="#!" class="dropdown-item">Another action </a>
                                                                    <a href="#!" class="dropdown-item">Something else here</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-7">
                                        <div class="card">
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div><h5>Transaction History</h5>
                                                </div>
                                            </div>
                                            <div class="list-group list-group-flush">
                                                <div class="list-group-item d-flex align-items-center justify-content-between gap-6">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="icon icon-shape rounded-circle icon-sm flex-none w-rem-10 h-rem-10 text-sm bg-primary bg-opacity-25 text-primary">
                                                            <i class="bi bi-send-fill"></i>
                                                        </div>
                                                        <div class="">
                                                            <span class="d-block text-heading text-sm fw-semibold">Cardano </span>
                                                            <span class="d-none d-sm-block text-muted text-xs">2 days ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-none d-md-block text-sm">0xd029384sd343fd...eq23</div>
                                                    <div class="d-none d-md-block">
                                                        <span class="badge bg-danger bg-opacity-25 text-danger">Canceled</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="d-block text-heading text-sm fw-bold">+0.2948 BTC </span>
                                                        <span class="d-block text-muted text-xs">+$10,930.90</span>
                                                    </div>
                                                </div>
                                            </div>
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

<?php include "./components/footer.php"; ?>