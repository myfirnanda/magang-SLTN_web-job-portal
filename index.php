<?php
$homepageJobs = new WP_Query(array(
    "posts_per_page" => 8,
    "post_type" => "job",
    'meta_key' => 'job_date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
));
?>

<?php get_header(); ?>

<!-- ----- Jumbotron ----- -->
<section class="jumbotron w-100 vh-100 z-10">
    <div class="container">
        <div class="row d-flex align-items-center vh-100">
            <div class="col-sm-6 col-xs-12">
                <h2 class="text-xxl text-dark display-6 fw-bold">Jelajahi <span class="text-primary">Peluang
                        Karir</span><br>dan Masa Depan Anda</h2>
                <p class="text-secondary">Bergabunglah dengan jutaan pencari kerja lainnya di platform kami<br>dan
                    temukan berbagai lowongan pekerjaan menarik</p>
                <button class="btn btn-primary pe-auto py-2 px-3">Temukan Karir</button>
            </div>
            <div class="col-sm-6 col-xs-12 position-relative h-100">
                <div class="img-box">
                    <img src="<?= get_theme_file_uri('./assets/images/header.png') ?>" alt="header" class="position-absolute w-80 bottom-0">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ----- End Jumbotron ----- -->

<!-- ----- Categories ----- -->
<section class="categories xtra-p bg" id="categories">
    <div class="container">
        <h2 class="text-dark text-center fw-bold mb-5 h1" id="categories-title">Telusuri <span class="text-primary">Pekerjaan</span><br>Berdasarkan Kategori</h2>
        <div class="row g-3">
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-code text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Teknologi Informasi</h6>
                    <p class="mb-0 text-secondary">167 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Pelayanan Pelanggan</h6>
                    <p class="mb-0 text-secondary">93 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Human Resource</h6>
                    <p class="mb-0 text-secondary">146 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Manajemen Proyek</h6>
                    <p class="mb-0 text-secondary">72 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Pengembangan Bisnis</h6>
                    <p class="mb-0 text-secondary">86 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Penjualan</h6>
                    <p class="mb-0 text-secondary">162 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Edukasi & Mengajar</h6>
                    <p class="mb-0 text-secondary">43 Job Avaible</p>
                </div>
            </div>
            <div class="categories-item col-xs-6 col-sm-3">
                <div class="categories-item bg-white p-4 rounded">
                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                    <h6 class="h5 fw-bold text-primary">Desain Grafis</h6>
                    <p class="mb-0 text-secondary">257 Job Avaible</p>
                </div>
            </div>
        </div>
</section>
<!-- ----- End Categories ----- -->

<!-- ----- About ----- -->
<section class="about container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" id="about-img">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="<?= get_theme_file_uri('./assets/images/about/about-1.jpg') ?>">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="<?= get_theme_file_uri('./assets/images/about/about-2.jpg') ?>" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="<?= get_theme_file_uri('./assets/images/about/about-3.jpg') ?>" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="<?= get_theme_file_uri('./assets/images/about/about-4.jpg') ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4 fw-bold" id="about-title">Wujudkan <span class="text-primary">Potensi Anda</span> dengan Portal Kerja Kami</h1>
                <p class="mb-4" id="about-desc">Kami adalah website job portal yang membantu Anda mencari pekerjaan dengan mudah dan efisien. Kami menawarkan berbagai manfaat untuk membantu Anda mencari pekerjaan impian Anda.</p>
                <div id="about-text">
                    <p><i class="fa fa-check text-primary me-3"></i>Pencarian pekerjaan yang lebih mudah dan cepat</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Informasi pekerjaan terbaru dan terpercaya</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Dukungan dan saran dari para ahli di industri</p>
                </div>
                <a class="btn btn-primary py-2 px-3 mt-3" href="<?php echo site_url('/tentang-kami'); ?>" id="about-button">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- ----- End About ----- -->

<!-- ----- Step Guide ----- -->
<section class="step-guide" id="step-guide">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-6 col-xs-12">
                <div class="text-box">
                    <h4 class="h1 fw-bold" id="step-guide-title">Temukan <span class="text-primary">Pekerjaan</span> dengan<br>3 Langkah
                        Mudah</h4>
                    <p class="text-secondary" id="step-guide-desc">Cukup dengan 3 langkah saja, Anda bisa menentukan pekerjaan impian
                        Anda dari perusahaan ternama.</p>
                    <ol class="steps">
                        <li>
                            <h5 class="fw-bold text-primary">Registrasi Akun</h5>
                            <p class="text-secondary">Setelah mendaftar, Anda mendapatkan akses ke akun pribadi yang
                                dapat digunakan untuk mencari pekerjaan.</p>
                        </li>
                        <li>
                            <h5 class="fw-bold text-primary">Temukan Pekerjaan</h5>
                            <p class="text-secondary">Gunakan fitur pencarian untuk menemukan pekerjaan yang cocok
                                dengan kriteria yang diinginkan.</p>
                        </li>
                        <li>
                            <h5 class="fw-bold text-primary">Lamar Pekerjaan</h5>
                            <p class="text-secondary">Ikuti langkah-langkah untuk melamar pekerjaan dengan mengisi
                                formulir lamaran dan melampirkan resume.</p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12" id="step-guide-img">
                <div class="img-box">
                    <img src="<?= get_theme_file_uri('./assets/images/step.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ----- End Step Guide ----- -->

<!-- ----- Job list ----- -->
<section class="job-list xtra-p" id="job-list">
    <div class="container">
        <div class="py-3 text-center">
            <h3 class="h1 fw-bold" id="job-list-title">Temukan <span class="text-primary">Pekerjaan</span> Impian Anda</h3>
            <p class="text-secondary" id="job-list-desc">Jelajahi pekerjaan sesuai bidang Anda dan mulai melamar.</p>
        </div>
        <div class="job-container row g-4" id="job-list">
            <?php while ($homepageJobs->have_posts()) {
                $homepageJobs->the_post(); ?>
                <div class="col-xs-6 col-sm-3">
                    <div class="job-item px-4 py-3 rounded shadow d-flex justify-content-around flex-column" style="height: 340px;">
                        <div class="mb-1">
                            <div class="company d-flex align-items-center mb-3">
                                <div class="img-box bg-light">
                                    <?php
                                    $image = get_field('company_logo');
                                    if (!empty($image)) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="40" height="40" />
                                    <?php endif; ?>
                                </div>
                                <div class="company-desc">
                                    <h6 class="fw-bold"><a href="<?php the_permalink() ?>" class="text-dark text-decoration-none"><?php echo get_field('company_name'); ?></a></h6>
                                </div>
                            </div>
                            <?php
                            $jobType = get_field('job_type');
                            $id = '';

                            if ($jobType == 'Full-time') {
                                $id = 'bg-fulltime';
                            } else if ($jobType == 'Part-time') {
                                $id = 'bg-parttime';
                            } else if ($jobType == 'Magang') {
                                $id = 'bg-magang';
                            } else if ($jobType == 'Freelance') {
                                $id = 'bg-freelance';
                            }
                            ?>
                            <span class="job-type py-1 px-2 rounded-3" id="<?= $id; ?>"><?= $jobType; ?></span>
                            <div class="job-title mt-2">
                                <h5 class="title m-0"><a href="<?php the_permalink() ?>" class="text-decoration-none text-dark"><?php the_title() ?></a></h5>
                            </div>
                        </div>
                        <span class="text-secondary"><?= get_field('job_city') ?></span>
                        <div class="mt-1">
                            <div class="content">
                                <p class="desc"><?php echo get_field('job_desc') ?></p>
                                <div class="cta d-flex justify-content-between align-items-center">
                                    <?php
                                    $number = get_field('job_salary');
                                    $formatted_number = number_format($number, 0, ',', '.');
                                    ?>
                                    <span class="mt-1 fw-bold">Rp<?php echo $formatted_number; ?></span>
                                    <a class="btn btn-light text-primary hover-primary" href="one.html">Lamar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- ----- End Job List ----- -->

<!-- feedback -->
<section class="feedback mb-5" id="feedback">
    <div class="container">
        <div class="title text-center">
            <h3 class="fw-bold h1 fw-bold">Feedback <span class="text-primary">Positif </span><br>dari Para Pencari Kerja</h3>
            <p class="text-secondary">Baca testimonial dari para pengguna situs kami yang telah sukses menemukan pekerjaan impian mereka.</p>
        </div>
        <div class="swiper feedback-container my-xtra pb-3" id="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-3 py-3 bdrs-xtra mx-xtra shadow-lg">
                        <img src="<?= get_theme_file_uri('./assets/images/person/person1.jpg') ?>" alt="" width="100" height="100" class=" rounded-circle" style="object-fit: cover;">
                        <div class="name w-70">
                            <h4 class="text-center fw-bold">Fajar Putra</h4>
                            <p class="text-center">Saya sangat senang bisa menemukan pekerjaan yang sesuai dengan keahlian saya di situs ini. Proses pencarian pekerjaan sangat mudah dan intuitif, serta terdapat banyak lowongan kerja berkualitas.</p>
                            <span class="person-job d-flex justify-content-center text-secondary">AI Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-3 py-3 bdrs-xtra mx-xtra shadow-lg">
                        <img src="<?= get_theme_file_uri('./assets/images/person/person2.jpg') ?>" alt="" width="100" height="100" class=" rounded-circle" style="object-fit: cover;">
                        <div class="name w-70">
                            <h4 class="text-center fw-bold">Ratna Sari Dewi</h4>
                            <p class="text-center">Saya berhasil mendapatkan pekerjaan yang saya inginkan setelah mencoba situs ini. Saya sangat merekomendasikan untuk semua orang yang sedang mencari pekerjaan.</p>
                            <span class="person-job d-flex justify-content-center text-secondary">UI/UX Designer</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-3 py-3 bdrs-xtra mx-xtra shadow-lg">
                        <img src="<?= get_theme_file_uri('./assets/images/person/person3.jpg') ?>" alt="" width="100" height="100" class=" rounded-circle" style="object-fit: cover;">
                        <div class="name w-70">
                            <h4 class="text-center fw-bold">Tiara Putri</h4>
                            <p class="text-center">Situs ini sangat membantu dalam mencari pekerjaan di bidang teknologi. Terdapat banyak lowongan kerja yang sesuai dengan keahlian saya, dan proses aplikasi sangat mudah dan efisien.</p>
                            <span class="person-job d-flex justify-content-center text-secondary">Data Analyst</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b"></i>
            </div>
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b"></i>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback -->

<!-- Newsletter -->
<section class="newsletter" id="newsletter">
    <div class="container shadow-lg p-5 xtra-bdrs newsletter-container bg-white">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="text-box w-70">
                    <h2 class="fw-bold">Dapatkan Informasi <span class="text-primary">Lowongan Kerja</span> Terbaru
                    </h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <form action="#" class=" bdrs d-flex justify-content-between p-2 bg">
                    <input type="text" placeholder="Masukan Email Anda" class="w-100 bg-transparent border-0">
                    <button class="btn bg-primary border-transparent px-3 py-2 text-white bdrs">Langganan</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ----- End Newsletter ----- -->

<?php get_footer(); ?>