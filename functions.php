<?php
function mojatema_script_enqueue(){
wp_enqueue_style('customstyle',get_template_directory_uri() .'/css/mojatema.css', array(), '1.0.0', 'all');
wp_enqueue_script('customjs', get_template_directory_uri() .'/js/mojatema.js', array(), '1.0.0', true);
}

add_action ('wp_enqueue_scripts'  , 'mojatema_script_enqueue'); 
function mojatema_teme_setup(){
   
    add_theme_support('menus');
 
    register_nav_menu('Glavni', 'glavna navigacija');
    register_nav_menu('drugi', 'futer navigacija');
}

add_action('init', 'mojatema_teme_setup'); 

function bsimple_scripts() {
    wp_enqueue_style( 'bsimple-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bsimple-clean', get_template_directory_uri() . '/css/clean-blog.min.css' );
    wp_enqueue_style( 'bsimple-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bsimple-fontawesome', get_template_directory_uri() . '/css/fa-all.min.css' );
    wp_enqueue_style( 'bsimple-font1', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" );
    wp_enqueue_style( 'bsimple-font2', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" );

    wp_enqueue_script( 'bsimple-jq', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'bsimple-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'bsimple-clean', get_template_directory_uri() . '/js/clean-blog.min.js');
    wp_enqueue_style('customstyle',get_template_directory_uri() .'/css/mojatema.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() .'/js/mojatema.js', array(), '1.0.0', true);
}    
add_theme_support('menus');

add_action( 'wp_enqueue_scripts', 'bsimple_scripts' );?>

<?php function add_menu_link_class( $atts, $item, $args ) {
    if($args->link_class) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if($args->list_item_class) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3); ?>