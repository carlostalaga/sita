<?php
add_action( 'after_setup_theme', 'broucku_setup' );
function broucku_setup() {
load_theme_textdomain( 'broucku', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'broucku' ) ) );
}
add_action( 'wp_enqueue_scripts', 'broucku_load_scripts' );
function broucku_load_scripts() {
wp_enqueue_style( 'broucku-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'broucku_footer_scripts' );
function broucku_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'broucku_document_title_separator' );
function broucku_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'broucku_title' );
function broucku_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'broucku_read_more_link' );
function broucku_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'broucku_excerpt_read_more_link' );
function broucku_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'broucku_image_insert_override' );
function broucku_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'broucku_widgets_init' );
function broucku_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'broucku' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'broucku_pingback_header' );
function broucku_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'broucku_enqueue_comment_reply_script' );
function broucku_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function broucku_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'broucku_comment_count', 0 );
function broucku_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}



/* add CSS and JS */
function add_theme_scripts() {

    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
    /*wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500&display=swap');*/
    /*wp_enqueue_style( 'typekit', 'https://use.typekit.net/khh6xnq.css' );*/

    wp_enqueue_style( 'style', get_stylesheet_uri() );

  /* JS */

    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

    /*wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');*/

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



/* Remove JQuery migrate */
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');



/* Register Custom Navigation Walker - https://github.com/wp-bootstrap/wp-bootstrap-navwalker */
/* help diagnose version */
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


/* Custom Post Type WORD OF THE WEEK
   ----------------------------- */
/*add_action( 'init', 'create_post_type_word' );
function create_post_type_word() { //identificar _word permite crear otros CPT sin problemas
register_post_type( 'words',
array(
'labels' => array(
'name' => __( 'Words' ),
'singular_name' => __( 'Word' ),
'add_new_item' => __('Add New Word'),
'add_new' => _x('Add New', 'word'),
'edit_item' => __('Edit Word'),
'new_item' => __('New Word'),
'all_items' => __('All Words'),
'view_item' => __('View Words'),
'search_items' => __('Search Words'),
'not_found' => __('No Words found'),
'not_found_in_trash' => __('No Words found in Trash'),
'parent_item_colon' => '',
'menu_name' => 'Words'
),
'taxonomies' => array('category'), // You can associate this CPT with a taxonomy or custom taxonomy - Required for Essential Grid selection of SOURCE
'public' => true,
'has_archive' => true,
'menu_position'=>10,
'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'comments' )
)
);
}*/





/* Add widget areas */
if ( function_exists('register_sidebar') ){

  register_sidebar(array(
    'name' => 'footer1',
    'id' => 'footer1',
    'before_widget' => '<div class = "footer1">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title-widget-footer">',
    'after_title' => '</div>',
  ));

  register_sidebar(array(
    'name' => 'footer2',
    'id' => 'footer2',
    'before_widget' => '<div class = "footer2">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title-widget-footer">',
    'after_title' => '</div>',
  ));

  register_sidebar(array(
    'name' => 'footer3',
    'id' => 'footer3',
    'before_widget' => '<div class = "footer3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title-widget-footer">',
    'after_title' => '</div>',
  ));

  register_sidebar(array(
    'name' => 'footer4',
    'id' => 'footer4',
    'before_widget' => '<div class = "footer4">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title-widget-footer">',
    'after_title' => '</div>',
  ));

  register_sidebar(array(
    'name' => 'footer5',
    'id' => 'footer5',
    'before_widget' => '<div class = "footer5">',
    'after_widget' => '</div>',
    'before_title' => '<div class="title-widget-footer">',
    'after_title' => '</div>',
  ));

}


/**
 * Conditionally Override Yoast SEO Breadcrumb Trail
 * http://plugins.svn.wordpress.org/wordpress-seo/trunk/frontend/class-breadcrumbs.php
 * -----------------------------------------------------------------------------------
 */

add_filter( 'wpseo_breadcrumb_links', 'wpse_100012_override_yoast_breadcrumb_trail' );

function wpse_100012_override_yoast_breadcrumb_trail( $links ) {
    global $post;

    if ( is_home() || is_singular( 'post' ) || is_archive() ) {
        $breadcrumb[] = array(
            /*'url' => get_permalink( get_option( 'page_for_posts' ) ),*/
            'url' => "https://spanishintheair.com/blog/",
            'text' => 'Blog',
        );

        array_splice( $links, 1, -2, $breadcrumb );
    }

    return $links;
}