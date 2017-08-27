<?php
/**
 * Register widget area. | Functions for widgets 
 *
 * @package ex-works
 *@link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function ex_works_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ex-works' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ex-works' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'    => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 1', 'ex-works' ),
		'description'   => esc_html__( 'Footer Widgets Row 1.', 'ex-works' ),
		'id'            => 'footer-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 2', 'ex-works' ),
		'description'   => esc_html__( 'Footer Widgets Row 2.', 'ex-works' ),
		'id'            => 'footer-2',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets 3', 'ex-works' ),
		'description'   => esc_html__( 'Footer Widgets Row 3.', 'ex-works' ),
		'id'            => 'footer-3',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'ex_works_widgets_init' );