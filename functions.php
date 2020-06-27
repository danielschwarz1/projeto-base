<?

// WordPress cleanup function
function template_setup() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

    add_filter('the_generator', '__return_false');
    add_filter('show_admin_bar','__return_false');

    add_theme_support('post-thumbnails');

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
}

add_action('after_setup_theme', 'template_setup');


// Image sizes
add_image_size('large', 1920, 9999, false);
add_image_size('medium_large', 1200, 9999, false);
add_image_size('thumbnail', 188, 188, true);


// Navigation
function register_menu() {
    register_nav_menu('menu_principal', __('Menu principal'));
    register_nav_menu('menu_footer', __('Menu footer'));
}

add_action('init', 'register_menu');
