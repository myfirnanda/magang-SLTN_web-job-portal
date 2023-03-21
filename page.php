<?php

    get_header();

    while( have_posts() ) {
        the_post(); ?>

        <section class="single-page">
            <div class="position-relative">
                <img class="w-100 mb-1" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url(<?= get_theme_file_uri('./assets/images/page-bg.jpg')?>); height: 50vh; background-position: center; background-repeat: no-repeat; background-size: cover;">
                <div class="container banner-text">
                    <h1 class="page-banner__title d-flex justify-content-center text-white fw-bold display-5"><?php the_title() ?></h1>
                </div>
            </div>
            <div class="container mt-5">
            <?php the_content(); ?>
            </div>
        </section>
    <?php }

    get_footer();
    
?>
