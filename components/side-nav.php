<nav class="flex-none navbar navbar-vertical navbar-expand-lg navbar-light bg-transparent show vh-lg-100 px-0 py-2" id="sidebar">
    <div class="container-fluid px-3 px-md-4 px-lg-6">
        <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-inline-block py-lg-1 mb-lg-5" href="./">
            <img src="assets/img/Giolee-logo.png" class="logo-dark h-rem-16 h-rem-md-16 mx-auto" alt="Logo">
            <img src="assets/img/Giolee-logo-light.png" class="logo-light h-rem-16 h-rem-md-16 mx-auto" alt="Logo">
        </a>
        <div class="navbar-user d-lg-none">
            <div class="dropdown">
                <a class="d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <div class="avatar avatar-sm text-bg-secondary rounded-circle">
                        <img src="assets/img/memoji-2.svg">
                    </div>
                    <div class="d-none d-sm-block ms-3"><span class="h6"><?php echo $_SESSION['firstName']; ?></span></div>
                    <div class="d-none d-md-block ms-md-2"><i class="bi bi-chevron-down text-muted text-xs"></i></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="dropdown-header">
                        <span class="d-block text-sm text-muted mb-1">Signed in as</span> 
                        <span class="d-block text-heading fw-semibold"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="profile"><i class="bi bi-person me-3"></i>Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left me-3"></i>Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse overflow-x-hidden" id="sidebarCollapse">

            <ul class="navbar-nav">
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Dashboard'){echo 'active';}?>" href="dashboard"><i class="bi bi-grid-1x2-fill"></i> <span>Overview</span></a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='About'){echo 'active';}?>" href="#sidebar-pages-about" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-pages-about">
                        <i class="bi bi-buildings-fill"></i> 
                        <span>Company</span> 
                        <span class="badge badge-sm rounded-pill me-n2 bg-success-subtle text-success ms-auto"></span>
                    </a>
                    <div class="collapse" id="sidebar-pages-about">
                        <ul class="nav nav-sm flex-column mt-1">
                            <li class="nav-item"><a href="about" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="ceo" class="nav-link">The CEO's Desk</a></li>
                            <li class="nav-item"><a href="team" class="nav-link">Team</a></li>
                            <li class="nav-item"><a href="faq" class="nav-link">FAQ's</a></li>
                            <li class="nav-item"><a href="faq" class="nav-link">Career</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Services'){echo 'active';}?>" href="services"><i class="bi bi-file-earmark-break-fill"></i> <span>Services</span> </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Projects'){echo 'active';}?>" href="projects"><i class="bi bi-tools"></i> <span>Projects</span> </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Certifications'){echo 'active';}?>" href="certifications"><i class="bi bi-bookmarks-fill"></i> <span>Certifications</span></a>
                </li>


                <!-- <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Media'){echo 'active';}?>" href="media">
                        <i class="bi bi-collection-play-fill"></i> 
                        <span>Media</span>
                    </a>
                </li> -->

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Quote'){echo 'active';}?>" href="quote">
                        <i class="bi bi-file-earmark-pdf-fill"></i> <span>Quote</span> 
                        <?php
                            $countQuote = mysqli_query($conn, "SELECT quoteID FROM quote WHERE status='Open'");
                            echo "<span class='badge badge-sm rounded-pill me-n2 bg-danger-subtle text-danger ms-auto'>".number_format(mysqli_num_rows($countQuote), 0, '.', ',')."</span>"
                        ?>
                    </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Support'){echo 'active';}?>" href="support">
                        <i class="bi bi-headset"></i> <span>Support</span> 
                        <?php
                            $countEnquiries = mysqli_query($conn, "SELECT supportID FROM support WHERE status='Open'");
                            echo "<span class='badge badge-sm rounded-pill me-n2 bg-danger-subtle text-danger ms-auto'>".number_format(mysqli_num_rows($countEnquiries), 0, '.', ',')."</span>"
                        ?>
                    </a>
                </li>

            </ul>

            <hr class="navbar-divider my-5 opacity-70">

            <ul class="navbar-nav">
                <li>
                    <span class="nav-link text-xs fw-semibold text-uppercase text-muted ls-wide">Settings</span>
                </li>
                
                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Admins'){echo 'active';}?>" href="admins">
                        <i class="bi bi-people-fill"></i> <span>Admins</span> 
                    </a>
                </li>

                <li class="nav-item my-1">
                    <a class="nav-link d-flex align-items-center rounded-pill <?php if($page=='Profile'){echo 'active';}?>" href="profile">
                        <i class="bi bi-person-fill"></i> <span>Profile</span> 
                    </a>
                </li>
            </ul>

            <div class="mt-auto"></div>

            <div class="card bg-dark border-0 mt-5 mb-3">
                <div class="card-body">
                    <a href="logout" class="btn btn-sm btn-danger w-100">Log Out<i class="bi bi-box-arrow-left ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>