<?php

$number = get_field('job_salary');
$formatted_number = number_format($number, 0, ',', '.');

get_header()

?>

<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8" id="job-detail">
                <div class="d-flex align-items-center mb-5">
                    <?php
                    $image = get_field('company_logo');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" class="flex-shrink-0 img-fluid border rounded" />
                    <?php endif; ?>
                    <div class="text-start ps-4">
                        <h3 class="mb-3"><?php the_title() ?></h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo get_field('job_city') ?></span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php the_field('job_type') ?></span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>Rp<?php echo $formatted_number; ?></span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Deskripsi Pekerjaan</h4>
                    <p><?php echo get_field('job_desc') ?></p>
                    <h4 class="mb-3">Kualifikasi</h4>
                    <p><?php the_content() ?></p>
                </div>

                <div>
                    <h4 class="mb-4">Lamar Pekerjaan</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Portfolio Website">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="file" class="form-control bg-white">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Lamar Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4" id="aside-job-detail">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Ikhtisar Pekerjaan</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Nama Perushaan: <?php echo get_field('company_name') ?></p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Diposting pada: <?php $jobDate = new DateTime(get_field('job_date'));
                                                                                            echo $jobDate->format('d') ?> <?php echo $jobDate->format('M') ?>, <?php echo $jobDate->format('Y') ?></p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Tipe Pekerjaan: <?php echo get_field('job_type') ?></p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Gaji: Rp<?php echo $formatted_number; ?></p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Lokasi: <?php echo get_field('job_city') ?></p>
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Detail Perusahaan</h4>
                    <p class="m-0"><?php echo get_field('company_profile') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->

<?php get_footer() ?>