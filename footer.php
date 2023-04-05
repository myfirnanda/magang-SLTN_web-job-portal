<footer class="footer bg <?php echo is_front_page() ? 'xtra-pt' : 'pt-5'; ?>" id="footer">
    <div class="container">
        <div class="footer-container">
            <div class="footer-item">
                <div class="logo">
                    <a href="<?php echo site_url() ?>">
                        <img src="<?= get_theme_file_uri('./assets/images/logo.png') ?>" alt="" width="180" height="40" class="mb-2">
                    </a>
                    <p class="text-secondary mt-1">Kami adalah sebuah platform lowongan kerja yang bertujuan untuk
                        membantu para pencari kerja menemukan pekerjaan yang sesuai dengan keahlian dan minat
                        mereka.</p>
                    <ul class="social-links list-unstyled d-flex fs-2 gap-3 to-top">
                        <li><a href="#"></a><i class="bx bxl-twitter icon"></i></li>
                        <li><a href="#"></a><i class='bx bxl-instagram icon'></i></li>
                        <li><a href="#"></a><i class='bx bxl-linkedin-square icon'></i></li>
                        <li><a href="#"></a><i class='bx bxl-youtube icon'></i></li>
                    </ul>
                </div>
            </div>
            <div class="footer-item">
                <h5 class="fw-bold h4">Tentang Kami</h5>
                <ul class="list-unstyled ">
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Cari Lowongan</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Hubungi Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Terms Condition</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h5 class="fw-bold h4">Perusahaan</h5>
                <ul class="list-unstyled ">
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Beranda</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Company Profile</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Berita</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Forum</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h5 class="fw-bold h4">Layanan Lainnya</h5>
                <ul class="list-unstyled ">
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Berbagi</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Komunitas</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Direktori</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none footerLink text-secondary">Bantuan</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="copyright text-center py-1">
            <p class="text-secondary">Copyright &copy; <?php echo date('Y') ?> SLTN. All rights reserved</p>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="assets/js/script.js"></script>

<?php wp_footer(); ?>
</body>

</html>