<header class="navbar navbar-expand-md bg-transparent d-print-none" style="min-height: auto;">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c7c7c7" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.813 11.612c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.986 4.986l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l.292 -.293l.106 -.095c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.674 4.675a4 4 0 0 1 -3.775 3.599l-.206 .005h-12a4 4 0 0 1 -3.98 -3.603l6.687 -6.69l.106 -.095zm9.187 -9.612a4 4 0 0 1 3.995 3.8l.005 .2v9.585l-3.293 -3.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-.307 .306l-2.293 -2.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-5.307 5.306v-9.585a4 4 0 0 1 3.8 -3.995l.2 -.005h12zm-2.99 5l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" stroke-width="0" fill="#c7c7c7" /></svg>
         <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3 text-white">
            <b> Gallery Java</b>
            <path d="M2 67L2 2" stroke="#757575" stroke-width="2.5" stroke-linecap="round" />
            </svg>
        </h1>
        <div class="nav-item dropdown order-md-last text-white">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                <span class="avatar avatar-sm" style="box-shadow: none;background-image: url(<?= base_url('dist/img/gambar/Singa.jpg') ?>)"></span>
                <div class="d-none d-xl-block ps-2">
                    <div><?= $this->session->userdata('Username') ?></div>
                    <div class="mt-1 small text-danger navbar-brand-autodark ">Developer</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="<?= base_url('Home/profile')?>" class="dropdown-item">Profile</a>
                <a href="<?= base_url('Auth/loginAkun')?>" class="dropdown-item">Logout</a>
            </div>
        </div>

        <div class="collapse navbar-collapse justify-content-center text-white" id="navbar-menu">
            <ul class="navbar-nav">
                <li class="nav-item <?= ($this->uri->segment(2) == 'index') ? 'active' : ''; ?>"> <a href="<?= base_url('Home/index') ?>" class="nav-link" style="color:white">BERANDA</a></li>
                <li class="nav-item <?= ($this->uri->segment(2) == 'album') ? 'active' : ''; ?>"><a href="<?= base_url('Home/album') ?>" class="nav-link" style="color:white">ALBUM</a></li>
                <li class="nav-item <?= ($this->uri->segment(2) == 'users') ? 'active' : ''; ?>"><a href="<?= base_url('Home/users') ?>" class="nav-link" style="color:white">USER</a></li>
            </ul>


        </div>
    </div>
</header>