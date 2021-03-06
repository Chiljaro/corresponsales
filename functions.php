<?php
add_action( 'init', 'my_custom_menus' ); 
function my_custom_menus() { 
		register_nav_menus( array( 
			'menu-superior' => __( 'Menu Superior' ),
			'menu-lateral' => __( 'Menu Lateral' )
		) ); 
	}

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );


function cuantas( $query ) {
        if ( is_category() ) {
        // Display only 1 post for the original blog archive
        $query->set( 'posts_per_page', 100 );
        return;
    }
}
add_action( 'pre_get_posts', 'cuantas', 1 );


add_theme_support( 'post-thumbnails' );
add_image_size('slider_thumbs', 479,300,true);
add_image_size('list_articles_thumbs', 450,370,true);
add_image_size('gallery_image', 300,200,true);



?>