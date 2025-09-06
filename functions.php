<?php 

function my_theme_enqueue_assets() {
    // CSS
    wp_enqueue_style(
        'theme-style', 
        get_template_directory_uri() . '/assets/styles/style.css', 
        array(), 
        filemtime(get_template_directory() . '/assets/styles/style.css') // cache-busting
    );

    // JS
    wp_enqueue_script(
        'theme-scripts', 
        get_template_directory_uri() . '/assets/scripts/main.js', 
        array('jquery'), 
        filemtime(get_template_directory() . '/assets/scripts/main.js'), 
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');


?>