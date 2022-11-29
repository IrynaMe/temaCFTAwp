

<?php



function foglio_stile()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}



add_action('wp_enqueue_scripts', 'foglio_stile');

function settaggi()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'settaggi');


function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


function registra_menu(){
    register_nav_menus(
      array('primary' => 'Primary Menu')
      );
 }

 add_action('after_setup_theme', 'registra_menu');



?>



