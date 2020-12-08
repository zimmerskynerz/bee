<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="<?= base_url('admin') ?>">
                    <img src="<?= base_url('assets/') ?>img/logo2.svg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="<?= base_url('admin') ?>" class="nav-link"> BEE </a>
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
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'pengguna' ? 'active' : '' ?>">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <line x1="9" y1="1" x2="9" y2="4"></line>
                            <line x1="15" y1="1" x2="15" y2="4"></line>
                            <line x1="9" y1="20" x2="9" y2="23"></line>
                            <line x1="15" y1="20" x2="15" y2="23"></line>
                            <line x1="20" y1="9" x2="23" y2="9"></line>
                            <line x1="20" y1="14" x2="23" y2="14"></line>
                            <line x1="1" y1="9" x2="4" y2="9"></line>
                            <line x1="1" y1="14" x2="4" y2="14"></line>
                        </svg>
                        <span>Pengguna</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                    <li>
                        <a href="<?= base_url('admin/pengguna/admin') ?>"> Admin </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/pengguna/validasi') ?>"> Validasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/pengguna/konsumen') ?>"> Konsumen </a>
                    </li>
                </ul>
            </li>
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'produk' ? 'active' : '' ?>">
                <a href="<?= base_url('admin/produk') ?>" aria-expanded="<?php echo $this->uri->segment(2) == 'beranda' ? 'true' : 'false' ?>" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span> Produk </span>
                    </div>
                </a>
            </li>
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'chat' ? 'active' : '' ?>">
                <a href="<?= base_url('admin/chat/inbox') ?>" aria-expanded="<?php echo $this->uri->segment(2) == 'beranda' ? 'true' : 'false' ?>" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span> Pesan </span>
                    </div>
                </a>
            </li>
            <li class="menu single-menu <?php echo $this->uri->segment(2) == 'transaksi' ? 'active' : '' ?>">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>Transaksi</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                    <li>
                        <a href="<?= base_url('admin/transaksi/baru') ?>"> Baru </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/transaksi/pembayaran') ?>"> Pembayaran </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/transaksi/proses') ?>"> Proses </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/transaksi/selesai') ?>"> Selesai </a>
                    </li>
                </ul>
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
                        <a href="<?= base_url('admin/akun/laporan') ?>"> Laporan </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/akun/profile') ?>"> Profile </a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/logout') ?>"> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>