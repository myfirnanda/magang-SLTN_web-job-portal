<?php

function magang_files() {
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    // Icons CDN
    wp_enqueue_style('boxicons-cdn', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
    wp_enqueue_style('iconscout-cdn', 'https://unicons.iconscout.com/release/v4.0.0/css/line.css');
    wp_enqueue_style('font-awesome_cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');

    // CSS
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('./assets/css/main.css') );
    wp_enqueue_style('custom-css', get_theme_file_uri('./assets/css/index.css') );

    // Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('script-js', get_theme_file_uri('./assets/js/script.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('popper-js', get_theme_file_uri('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('./node_modules/bootstrap/dist/js/bootstrap.min.js'), NULL, '1.0', true);

    // SwiperJS 
    wp_enqueue_style('swiper-css', get_template_directory_uri() . './node_modules/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . './node_modules/swiper/swiper-bundle.min.js');
}

add_action('wp_enqueue_scripts', 'magang_files');

// Post Type = Job
function magang_post_types() {
    register_post_type('job', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'jobs'),
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => 'Jobs',
            'add_new_item' => 'Add New Job',
            'edit_item' => 'Edit Job',
            'all_items' => 'All Jobs',
            'singular_name' => 'Job'
        ),
        'menu_icon' => 'dashicons-businessman',
    ));
}
add_action('init', 'magang_post_types');

// Change Placeholder of Job Post Type
function change_job_placeholders($title) {
    $screen = get_current_screen();
    if ('job' == $screen->post_type) {
        $title = 'Job Title';
    }
    return $title;
}
add_filter('enter_title_here', 'change_job_placeholders');

// Mengatur halaman sign up agar menggunakan template sign up
function set_signup_template( $template ) {
    if ( is_page( 'signup' ) ) {
        $new_template = locate_template( array( 'template-signup.php' ) );
        if ( '' != $new_template ) {
        return $new_template ;
        }
    }
    return $template;
}
add_filter( 'page_template', 'set_signup_template' );

?>