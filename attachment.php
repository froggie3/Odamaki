<?php
if ( $post->post_parent ) {
	wp_redirect( get_permalink( $post->post_parent ), 301 );
}
else {
	wp_redirect( home_url(), 302 );
}