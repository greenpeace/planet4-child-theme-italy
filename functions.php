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


function avatar_default($avatar_defaults) {
    $nuovo_avatar = 'img/user-avatar-default.png';
    $avatar_defaults[$nuovo_avatar] = "Avatar Personalizzato";
    return $avatar_defaults;
}
add_filter('avatar_defaults', 'avatar_default');
