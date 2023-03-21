<?php

// Tab Full Time 
$limitPostFullTime = 8;
$fullTime = array(
    "posts_per_page" => $limitPostFullTime,
    'post_type' => 'job',
    'meta_key' => 'job_date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => array(
        array(
        'key' => 'job_type',
        'value' => 'Full-time',
        'compare' => '='
        )
    )
);
$jobFullTime = new WP_Query($fullTime);

// Tab Part Time
$limitPostPartTime = 8;
$partTime = array(
    "posts_per_page" => $limitPostPartTime,
    'post_type' => 'job',
    'meta_key' => 'job_date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => array(
        array(
        'key' => 'job_type',
        'value' => 'Part-time',
        'compare' => '='
        )
    )
);
$jobPartTime = new WP_Query($partTime);

// Tab Magang 
$limitPostMagang = 8;
$magang = array(
    "posts_per_page" => $limitPostMagang,
    'post_type' => 'job',
    'meta_key' => 'job_date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => array(
        array(
        'key' => 'job_type',
        'value' => 'Magang',
        'compare' => '='
        )
    )
);
$jobMagang = new WP_Query($magang);

// Tab Freelance 
$limitPostFreelance = 8;
$freelance = array(
    "posts_per_page" => $limitPostFreelance,
    'post_type' => 'job',
    'meta_key' => 'job_date',
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'meta_query' => array(
        array(
        'key' => 'job_type',
        'value' => 'Freelance',
        'compare' => '='
        )
    )
);
$jobFreelance = new WP_Query($freelance);

// Job salary 
$number = get_field('job_salary');
$formatted_number = number_format($number, 0, ',', '.');

get_header() ?>

<section class="job-archive">
    <div class="w-100" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url(<?= get_theme_file_uri('./assets/images/page-bg.jpg')?>); height: 50vh; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="job-banner-text">
                <h1 class="d-flex justify-content-center align-items-center text-white fw-bold">Temukan Pekerjaan Terbaikmu dengan Mudah</h1>
                <p class="d-flex justify-content-center align-items-center text-white text-center mx-5">Temukan pekerjaan terkini dari perusahaan ternama dengan mudah. Dapatkan informasi tentang gaji menarik dan peluang karir terbaikmu dengan platform pencarian pekerjaan terdepan. Jadilah yang terdepan dalam meraih kesuksesan karirmu.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="job-field mt-5">
            <ul class="tabs list-unstyled d-flex justify-content-center mb-5">
                <li><a href="#full-time" class="text-decoration-none mx-3 fw-bold">Full Time</a></li>
                <li><a href="#part-time" class="text-decoration-none mx-3 fw-bold">Part Time</a></li>
                <li><a href="#magang" class="text-decoration-none mx-3 fw-bold">Magang</a></li>
                <li><a href="#freelance" class="text-decoration-none mx-3 fw-bold">Freelance</a></li>
            </ul>
            <div class="tab-container mb-5 pb-5">
                <div class="tab_content" id="full-time">
                    <p class="my-4 fw-bold h6 fs-5">Ada <?php echo $jobFullTime->found_posts; ?> Lowongan Full-Time yang Tersedia Untuk Anda.</p>
                    <?php while($jobFullTime->have_posts()) : $jobFullTime->the_post(); ?>
                    <div class="job-item p-4 mb-5 rounded">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <?php
                                $image = get_field('company_logo');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" class="flex-shrink-0 img-fluid border rounded" />
                                <?php endif; ?>
                                <div class="text-start ps-4">
                                    <a href="<?php the_permalink()?>" class="text-decoration-none text-dark">
                                        <h5 class="mb-3"><?php the_title() ?></h5>
                                    </a>    
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?= get_field('job_city') ?></span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo get_field('job_type') ?></span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp<?php echo $formatted_number; ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="one.html">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i><?php $jobDate = new DateTime(get_field('job_date')); echo $jobDate->format('d') ?> <?php echo $jobDate->format('M') ?> <?php echo $jobDate->format('Y') ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php if($jobFullTime->found_posts > $limitPostFullTime) :?>
                    <div class="more-job d-flex justify-content-center">
                        <button class="btn btn-primary d-flex px-5 py-3">Lihat Lebih Banyak</button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="tab_content" id="part-time">
                    <p class="mt-5 mb-4 fw-bold h6 fs-5">Ada <?php echo $jobPartTime->found_posts; ?> Lowongan Part-Time yang Tersedia Untuk Anda.</p>
                    <?php while($jobPartTime->have_posts()) : $jobPartTime->the_post(); ?>
                    <div class="job-item p-4 mb-5 shadow-lg rounded">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <?php
                                $image = get_field('company_logo');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" class="flex-shrink-0 img-fluid border rounded" />
                                <?php endif; ?>
                                <div class="text-start ps-4">
                                    <a href="<?php the_permalink()?>" class="text-decoration-none text-dark">
                                        <h5 class="mb-3"><?php the_title() ?></h5>
                                    </a>    
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?= get_field('job_city') ?></span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo get_field('job_type') ?></span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp<?php echo $formatted_number; ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="one.html">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i><?php $jobDate = new DateTime(get_field('job_date')); echo $jobDate->format('d') ?> <?php echo $jobDate->format('M') ?> <?php echo $jobDate->format('Y') ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php if($jobFullTime->found_posts > $limitPostFullTime) :?>
                    <div class="more-job d-flex justify-content-center">
                        <button class="btn btn-primary d-flex px-5 py-3">Lihat Lebih Banyak</button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="tab_content" id="magang">
                    <p class="my-4 fw-bold h6 fs-5">Ada <?php echo $jobMagang->found_posts; ?> Lowongan Magang yang Tersedia Untuk Anda.</p>
                    <?php while($jobMagang->have_posts()) : $jobMagang->the_post(); ?>
                    <div class="job-item p-4 mb-5 shadow-lg rounded">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <?php
                                $image = get_field('company_logo');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" class="flex-shrink-0 img-fluid border rounded" />
                                <?php endif; ?>
                                <div class="text-start ps-4">
                                    <a href="<?php the_permalink()?>" class="text-decoration-none text-dark">
                                        <h5 class="mb-3"><?php the_title() ?></h5>
                                    </a>    
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?= get_field('job_city') ?></span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo get_field('job_type') ?></span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp<?php echo $formatted_number; ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="one.html">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i><?php $jobDate = new DateTime(get_field('job_date')); echo $jobDate->format('d') ?> <?php echo $jobDate->format('M') ?> <?php echo $jobDate->format('Y') ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php if($jobFullTime->found_posts > $limitPostFullTime) :?>
                    <div class="more-job d-flex justify-content-center">
                        <button class="btn btn-primary d-flex px-5 py-3">Lihat Lebih Banyak</button>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="tab_content" id="freelance">
                    <p class="my-4 fw-bold h6 fs-5">Ada <?php echo $jobFreelance->found_posts; ?> Lowongan Freelance yang Tersedia Untuk Anda.</p>
                    <?php while($jobFreelance->have_posts()) : $jobFreelance->the_post(); ?>
                    <div class="job-item p-4 mb-5 shadow-lg rounded">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <?php
                                $image = get_field('company_logo');
                                if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" class="flex-shrink-0 img-fluid border rounded" />
                                <?php endif; ?>
                                <div class="text-start ps-4">
                                    <a href="<?php the_permalink()?>" class="text-decoration-none text-dark">
                                        <h5 class="mb-3"><?php the_title() ?></h5>
                                    </a>    
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?= get_field('job_city') ?></span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo get_field('job_type') ?></span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp<?php echo $formatted_number; ?></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="one.html">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i><?php $jobDate = new DateTime(get_field('job_date')); echo $jobDate->format('d') ?> <?php echo $jobDate->format('M') ?> <?php echo $jobDate->format('Y') ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php if($jobFullTime->found_posts > $limitPostFullTime) :?>
                    <div class="more-job d-flex justify-content-center">
                        <button class="btn btn-primary d-flex px-5 py-3">Lihat Lebih Banyak</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>