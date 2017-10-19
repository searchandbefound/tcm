<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/**
 *
 *  Force http/s for images in WordPress
 *
 *  Source:
 *  https://core.trac.wordpress.org/ticket/15928#comment:63
 *
 *  @param $url
 *  @param $post_id
 *
 *  @return string
 */
function ssl_post_thumbnail_urls( $url, $post_id ) {

	//Skip file attachments
	if ( ! wp_attachment_is_image( $post_id ) ) {
		return $url;
	}

	//Correct protocol for https connections
	list( $protocol, $uri ) = explode( '://', $url, 2 );

	if ( is_ssl() ) {
		if ( 'http' == $protocol ) {
			$protocol = 'https';
		}
	} else {
		if ( 'https' == $protocol ) {
			$protocol = 'http';
		}
	}

	return $protocol . '://' . $uri;
}

add_filter( 'wp_get_attachment_url', 'ssl_post_thumbnail_urls', 10, 2 );