<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="http://localhost:8012/project/model/dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="http://localhost:8012/project/model/Kids.php">Kids</a>
                        <a class="nav-link" href="http://localhost:8012/project/model/Woman.php">Woman</a>
                        <a class="nav-link" href="http://localhost:8012/project/model/Man.php">Man</a>
                    </nav>
                </div>
                <a class="nav-link" href="http://localhost:8012/project/model/productdetail.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product Detail
                </a>
                <a class="nav-link" href="http://localhost:8012/project/model/contactus.php">
                    <div class="sb-nav-link-icon"><i class="bi bi-envelope"></i></div>
                    Contact Us
                </a>
                <a class="nav-link" href="http://localhost:8012/project/model/ourteam.php">
                    <div class="sb-nav-link-icon"><i class="bi bi-people"></i></i></div>
                    Our Team
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION['username']; ?>
        </div>
    </nav>
</div>
