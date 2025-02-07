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



function override_get_avatar_html( $avatar, $id_or_email, $args ) {
    // URL completo del tuo avatar personalizzato
    $custom_avatar_url = get_stylesheet_directory_uri() . '/img/user-avatar-default.png';
    
    // Verifica se l'HTML contiene l'URL del default avatar del tema (in questo esempio "p4-avatar.jpg")
    if ( strpos( $avatar, 'p4-avatar.jpg' ) !== false ) {
        // Sostituisci l'URL del default con il tuo URL personalizzato
        $avatar = str_replace(
            get_template_directory_uri() . '/images/p4-avatar.jpg',
            $custom_avatar_url,
            $avatar
        );
    }
    return $avatar;
}
add_filter( 'get_avatar', 'override_get_avatar_html', 10, 3 );

