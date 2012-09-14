<?php 
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size(325, 205, true);
function custom_excerpt_length( $length ) {
	return 67;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '"> ... Read More.</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

register_sidebar(array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar_title">',
        'after_title' => '</div>',
    ));
if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}
?>
