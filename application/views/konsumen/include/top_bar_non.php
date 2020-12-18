<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="<?= base_url('index.php') ?>">
                    <img src="<?= base_url('assets/') ?>img/logo2.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="<?= base_url('index.php') ?>" class="nav-link"> BEE2 </a>
            </li>
        </ul>
        <ul class="list-unstyled menu-categories" id="topAccordion">
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                <a href="<?= base_url('admin/dashboard') ?>" aria-expanded="<?php echo $this->uri->segment(2) == 'beranda' ? 'true' : 'false' ?>" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span> Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'akun' ? 'active' : '' ?>">
                <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                        <span>Akun</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                    <li>
                        <a href="<?= base_url('konsumen/daftar') ?>"> Daftar </a>
                    </li>
                    <li>
                        <a href="<?= base_url('konsumen/login') ?>"> Login </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>