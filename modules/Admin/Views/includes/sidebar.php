<nav>
    <div class='logo-name'>
        <div class="logo-image">
            <img src="<?= base_url('images/logo/logo.png') ?>" alt="logo">
        </div>
        <span class="logo_name">Chiromo HG</span>
    </div>

    <div class="menu-items">
        <?php if(session()->has('user_uuid')): ?>
        <?php if(session()->get('role_name') == 'Admin'): ?>
            <ul class="nav-links">
                <li id="navLink">
                    <a class="<?= (current_url() == base_url('admin/dashboard')) ? 'active' : ''; ?>"
                       href="<?= base_url('admin/dashboard') ?>">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Psychologists</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Psychiatrists</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Patients</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Appointments</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-money-withdraw"></i>
                        <span class="link-name">Payments</span>
                    </a>
                </li>

                <li>
                    <a
                        class="<?= (current_url() == base_url('admin/dashboard/manage_assessments')) ? 'active' : ''; ?>"
                        href="<?= base_url('admin/dashboard/manage_assessments')?>">
                        <i class="uil uil-copy-landscape"></i>
                        <span class="link-name">Assessments</span>
                    </a>
                </li>
                <li>
                    <a class="<?= (current_url() == base_url('admin/dashboard/manage_users')) ? 'active' : ''; ?>"
                       href="<?= base_url('admin/dashboard/manage_users') ?>">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">User Management</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="uil uil-file-blank"></i>
                        <span class="link-name">Reports</span>
                    </a>
                </li>

                <li>
                    <a class="<?= (current_url() == base_url('admin/dashboard/manage_users/profile')) ? 'active' : ''; ?>"
                       href="<?= base_url('admin/dashboard/manage_users/profile') ?>">
                        <i class="uil uil-user-circle"></i>
                        <span class="link-name">Profile</span>
                    </a>
                </li>
            </ul>
        <?php elseif(session()->get('role_name') == 'Therapist'): ?>

            <ul class="nav-links">
                <li id="navLink">
                    <a class="<?= (current_url() == base_url('admin/dashboard')) ? 'active' : ''; ?>"
                       href="<?= base_url('admin/dashboard') ?>">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Psychologists</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Psychiatrists</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-export"></i>
                        <span class="link-name">Patients</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Appointments</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-money-withdraw"></i>
                        <span class="link-name">Payments</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-copy-landscape"></i>
                        <span class="link-name">Assessments</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="uil uil-file-blank"></i>
                        <span class="link-name">Reports</span>
                    </a>
                </li>

                <li>
                    <a class="<?= (current_url() == base_url('admin/dashboard/manage_users/profile')) ? 'active' : ''; ?>"
                       href="<?= base_url('admin/dashboard/manage_users/profile') ?>">
                        <i class="uil uil-user-circle"></i>
                        <span class="link-name">Profile</span>
                    </a>
                </li>

            </ul>
        <?php endif; ?>
        <?php endif; ?>

        <ul class="logout-mode">
            <li>
                <a href="<?= base_url('admin/auth/logout') ?>">
                    <i class="uil uil-sign-out-alt"></i>
                    <span class="link-name">Logout</span>
                </a>
            </li>

            <li class="mode">
                <a href="">
                    <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                    <span class="switch"></span>
                </div>
            </li>
        </ul>
    </div>
</nav>


