
<nav>
    <div class='logo-name'>
        <div class="logo-image">
            <img src="<?= base_url('images/logo/logo.png') ?>" alt="logo">
        </div>
        <span class="logo_name">Chiromo HG</span>
    </div>
    <div class="menu-items">
        <?php if (session()->has('user_uuid')): ?>
            <?php if (isset($sidebar)): ?>
                <ul class="nav-links">
                    <?php foreach ($sidebar as $menuItem): ?>
                        <li>
                            <a class="<?= (current_url() == base_url($menuItem['sidebar_url'])) ? 'active' : ''; ?>"
                               href="<?= base_url($menuItem['sidebar_url']) ?>">
                                <i class="<?= $menuItem['sidebar_icon'] ?>"></i>
                                <span class="link-name"><?= $menuItem['sidebar_label'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
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

