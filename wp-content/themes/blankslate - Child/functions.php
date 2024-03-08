<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( 'parenthandle' ),
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);


	
}




// Custom Excerpt order
function custom_excerpt_with_image_tags_title_below($excerpt) {
    if (has_tag()) {
        $tags = get_the_tag_list('', ', ', ''); // Get tags as a comma-separated list
        $tags_output = sprintf('<div class="tags">%s</div>', $tags);

        // Get the featured image
        if (has_post_thumbnail()) {
            $featured_image = get_the_post_thumbnail(null, 'post-excerpt-thumbnail'); // 'post-excerpt-thumbnail' is the image size
        } else {
            $featured_image = ''; // No featured image
        }
        
        $post_title = sprintf('<h2>%s</h2>', get_the_title()); // Get the post title
        
        $excerpt = $featured_image . $tags_output . $post_title . '<div class="excerpt-min-height">' . $excerpt . '</div>'; // Concatenate image, tags, title, and wrapped excerpt
   
	
	

	}

	
    return $excerpt;

}





add_filter('the_excerpt', 'custom_excerpt_with_image_tags_title_below');


 // Custom Image Size
function custom_thumbnail_sizes() {
    add_image_size('post-excerpt-thumbnail', 323, 162, true); // Width, Height, Crop
}
add_action('after_setup_theme', 'custom_thumbnail_sizes');


function we_remove_post_image( $html, $post_id, $post_image_id ) { 	if(is_single())
	{ 		return ''; 	} else	 	return $html; } 
	add_filter( 'post_thumbnail_html', 'we_remove_post_image', 10, 3 );

?>


