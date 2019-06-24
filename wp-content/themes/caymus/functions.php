<?php
    
    // Add RSS links to <head> section
    add_theme_support( 'automatic-feed-links' ) ;
    
    // Load jQuery
    if ( !is_admin() ) {
      // wp_deregister_script('jquery');
      // wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
      // wp_enqueue_script('jquery');
           add_action( 'wp_enqueue_scripts', 'my_scripts' );
    }
    
    // Clean up the <head>
    function removeHeadLinks() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    // Declare sidebar widget zone 
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
    // This theme uses post thumbnails
add_theme_support( 'post-thumbnails' ); 
//, array( 'portfolio_companies', 'case_study', 'current_portfolio', 'our_team') );
// Add it for posts

    // Add Custom Menu
    //add_action('init', 'register_custom_menu');

    //function register_custom_menu() {
    //register_nav_menu('custom_menu', __('Custom Menu'));
    //}
     function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
    
// Add scripts
function my_scripts() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
       wp_enqueue_script('jquery');
}
?>
