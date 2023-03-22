<header class="header w-100 z-100 <?php echo is_singular('job') ? 'shadow-sm' : ''; ?>" id="header">
    <div class="nav-bar w-100 h-5rem <?php echo is_front_page() ? 'position-absolute' : ''; ?> container-fluid d-flex align-items-center">
        <div class="container">
            <nav class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="<?php echo site_url() ?>">
                    <img src="<?= get_theme_file_uri('./assets/images/logo.png') ?>" alt="logo" width="180" height="40"></a>
                </div>
                <ul class="nav-links d-flex align-items-center list-unstyled w-35 justify-content-between h-100">
                    <li><a href="<?php echo site_url() ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_front_page() ? 'active' : ''; ?>">Beranda</a></li>
                    <li><a href="<?php echo get_post_type_archive_link( 'job' ); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_archive('job') ? 'active' : ''; ?>">Cari Lowongan</a></li>
                    <li><a href="<?php echo site_url('/kontak'); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_page('kontak') ? 'active' : ''; ?>">Kontak</a></li>
                    <li><a href="<?php echo site_url('/bantuan'); ?>" class="text-decoration-none fw-bold text-secondary <?php echo is_page('bantuan') ? 'active' : ''; ?>">Bantuan</a></li>
                </ul>
                <div class="join d-flex align-items-center">
                    <a href="<?php echo site_url('/signup'); ?>">
                        <button class="btn btn-primary pe-auto">Daftar</button>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
