<!-- aggiungere fogli di stile e Bootstrap -->
<!-- https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/ -->
<!-- https://nicholasmarmonti.com/wordpress/functions-php/ -->

<?php
function foglio_stile()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapJS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}

//hook quando implemento un processo standard di wordpress = wp_enqueue_scripts, allora anche il contenuto della
//funzione foglio_stile viene implementato  , cioè viene caricato style.css
//questo e equivalente in HTML a   <link rel="stylesheet" href="style.css">
// hooks.https://codex.wordpress.org/Plugin_API/Action_Reference
//https://codex.wordpress.org/Plugin_API/Filter_Reference
//https://codex.wordpress.org/Plugin_API/Action_Reference

add_action('wp_enqueue_scripts', 'foglio_stile');

// aggiungi immagine in evidenza in articoli o pagine
// https://developer.wordpress.org/reference/functions/add_theme_support/

function settaggi()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'settaggi');
