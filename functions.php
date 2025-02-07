<?php


/**
 * Custom code included by GPIT
 */

require_once( 'includes/gravity-forms/italian-mobilephone-mask.php' );




/**
 * Additional code for the child theme goes in here.
 */

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);

function enqueue_child_styles() {
	$css_creation = filectime(get_stylesheet_directory() . '/style.css');

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [], $css_creation );
}


// function avatar_default($avatar_defaults) {
//     $nuovo_avatar = get_stylesheet_directory_uri() . '/img/user-avatar-default.png';
//     $avatar_defaults[$nuovo_avatar] = "Avatar Greenpeace";
//     return $avatar_defaults;
// }
// add_filter('avatar_defaults', 'avatar_default');



function override_default_avatar( $args, $id_or_email ) {
    // Qui controlli se il parametro 'default' è uguale a quello impostato dal tema
    $tema_default = get_template_directory_uri() . '/images/p4-avatar.jpg';

    if ( isset( $args['default'] ) && $args['default'] === $tema_default ) {
        // Sostituisci con il tuo avatar personalizzato
        $args['default'] = get_stylesheet_directory_uri() . '/img/user-avatar-default.png';
    }
    
    return $args;
}
add_filter( 'pre_get_avatar_data', 'override_default_avatar', 10, 2 );
