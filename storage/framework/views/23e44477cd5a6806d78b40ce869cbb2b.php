<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <?php if(auth()->guard()->guest()): ?>
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-columns"></i>Authentication</a>
                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a></li>
                        <li><hr class="dropdown-divider" /></li>
                    </ul>
                </li>
                </ul>
                <?php else: ?>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="/users">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Users
                </a>
                <a class="nav-link" href="/charts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Charts
                </a>
               
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            QDegrees Client
        </div>
        <?php endif; ?>
    </nav>
</div><?php /**PATH C:\Users\Q278\admin-dashboard\resources\views/theme/sidebar.blade.php ENDPATH**/ ?>