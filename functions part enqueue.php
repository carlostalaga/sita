<?php
/* Enqueue scripts and styles

https://www.sitepoint.com/bootstrap-wordpress-theme-integration/
Tasks:
- Enqueue Bootstrap stylesheet and JavaScript files
- use WordPress hooks to insert the Bootstrap files into the web page.

We’ve used various WordPress methods here, so let’s briefly look at each one of them:

    wp_enqueue_style(): this method enqueues and loads the stylesheet passed as a parameter. In the code above, we use it to load both the Bootstrap stylesheet and our custom CSS file.

    wp_enqueue_script(): this method enqueues and loads a script file. We’ve used it to load Bootstrap’s JavaScript bundle, indicating the jQuery library as a dependency. jQuery comes already bundled with WordPress, so we don’t need to load it using a URL. (WordPress knows exactly where to get it.)

    get_template_directory_uri(): this method gets the URI of the current activated theme directory.

    add_action('wp_enqueue_scripts', '...'): this method hooks our functions into the wp_enqueue_scripts action (used when en-queuing styles and scripts that need to appear on the front-end of the website).
*/

function themebs_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  // Enqueue custom styles
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  // Enqueue Font Awesome
  wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

  // Enqueue Slick scripts and styles
  wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/css/slick.css', '1.6.0', 'all');
  wp_enqueue_style( 'slickcsstheme', get_template_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');


}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts() {

  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  // Enqueue Slick scripts
  wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
  wp_enqueue_script( 'slickjs-init', get_template_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );

}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

/* //endEnqueue scripts and styles

?>