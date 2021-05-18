<?php
    register_nav_menus( array(
        'mainNav' => 'Main Nav',
    ) );

	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 315, 230, true ); // default Featured Image dimensions (cropped)
	 }

	function create_post_type() {
		register_post_type( 'services',
			array(
				'labels' => array(
					'name' => __( 'Services' ),
					'singular_name' => __( 'Service' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-megaphone',
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'taxonomies'  => array( 'category' )
			)
        );
        register_post_type( 'partners',
        array(
            'labels' => array(
                'name' => __( 'Partners' ),
                'singular_name' => __( 'Partner' )
            ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-nametag',
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'  => array( 'category' )
        )
    );
	}
	add_action( 'init', 'create_post_type' );


?>