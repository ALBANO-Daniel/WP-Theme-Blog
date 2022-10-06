<?php
function zzz_theme_support()
{

    // Adds dynamic title tag support
    // as long as i have the wp_head() on view page
    add_theme_support('title-tag');
    add_theme_support('custom-logo');  // theme>customize>changeLogo
    add_theme_support('post-thumbnails'); // add section 'featured image' in the post edition dashboard
    // thumbnail size can be edit in settings
}
add_action('after_setup_theme', 'zzz_theme_support');

// function to make the menu 
function zzz_menus()
{

    // locations to the menu CSS = key(menu location name) => value 
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items",
    );
    register_nav_menus($locations);
}
add_action('init', 'zzz_menus');


function zzz_register_styles()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('zzz-style', get_template_directory_uri() . "/style.css", array('zzz-bootstrap'), $version, 'all');
    wp_enqueue_style('zzz-fontawesome',  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('zzz-bootstrap',  "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
};
add_action('wp_enqueue_scripts', 'zzz_register_styles');


function zzz_register_scripts()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('zzz-jquery',  "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('zzz-popper',  "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('zzz-bootstrap',  "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('zzz-script', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
};
add_action('wp_enqueue_scripts', 'zzz_register_scripts');



//features 

function zzz_widget_areas()
{

    register_sidebar(
        array(
            // example of after/before title
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'Sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
    // footer side bar 
    register_sidebar(
        array(
            // example of after/before title
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}
// add this custom function to some hook in this case 'widgets_init'
add_action('widgets_init', 'zzz_widget_areas');
