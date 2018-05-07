<?php
/**
 * Defines customizer options
 *
 * @package Customizer_Library
 */

function customizer_library_gateway_options() {

	// Theme defaults
	$primary_color = '#e8554e';
	$primary_hover_color = '#db251d';

	// Get Categories
	$options_cats = array();
	$options_cats_obj = get_categories( 'type=post');
	$options_cats[''] = 'Select a Category:';
	foreach ($options_cats_obj as $cat) {
		$options_cats[$cat->term_id] = $cat->cat_name;
	}

	// Background Image Behavior Options
	$bg_attachment = array(
	    'fixed' 	=> 'Fixed',
	    'scroll' 	=> 'Scroll',
	);

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Image path defaults=
	$imagepath =  get_template_directory_uri() . '/img/';

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Theme Options Panel
	$panel = 'theme-options';

	$panels[] = array(
	    'id' 		=> $panel,
	    'title' 	=> __( 'Theme Options', 'gateway' ),
	    'priority' 	=> '10'
	);

	// Header
	$section = 'header';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Header', 'gateway' ),
		'priority'	 	=> '10',
		'description' 	=> __( 'Image will display in the header.', 'gateway' ),
		'panel' 		=> $panel
	);

	$options['header_logo'] = array(
		'id' 		=> 'header_logo',
		'label'   	=> __( 'Logo', 'gateway' ),
		'section' 	=> $section,
		'type'    	=> 'image',
		'default' 	=> $imagepath . 'logo.png'
	);

	$options['header_bg'] = array(
		'id' 		=> 'header_bg',
		'label'   	=>  __( 'Inner pages header background', 'gateway' ),
		'section' 	=> $section,
		'type'    	=> 'image',
		'default' 	=> $imagepath . 'hero-bg.jpg'
	);

	$options['header_color'] = array(
		'id' 		=> 'header_color',
		'label'   	=> __( 'Inner pages header background color.', 'gateway' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_color,
		'transport'	=> 'postMessage'
	);


	// Home
	$section = 'home';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home', 'gateway' ),
		'priority' 		=> '20',
		'description' 	=> __( 'Home Page Options.', 'gateway' ),
		'panel' 		=> $panel
	);

	$options['home_hero_bg'] = array(
		'id' 				=> 'home_hero_bg',
		'label'   			=> __( 'Home Background Image', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'image',
		'default' 			=> $imagepath . 'hero-bg.jpg',
		'active_callback' 	=> 'is_front_page'
	);

	$options['bg_attachement'] = array(
	    'id' 				=> 'bg_attachement',
	    'label'   			=> __( 'Select the behavior of the background image.', 'gateway' ),
	    'section' 			=> $section,
	    'type'    			=> 'select',
	    'choices' 			=> $bg_attachment,
	    'default' 			=> 'fixed',
	    'active_callback' 	=> 'is_front_page'
	);

	$options['home_hero_bg_color'] = array(
		'id' 				=> 'home_hero_bg_color',
		'label'   			=> __( 'Home Hero background color if no image is being used.', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'color',
		'default' 			=> $primary_color,
		'active_callback' 	=> 'is_front_page',
		'transport'			=> 'postMessage'
	);

	$options['home_posts_title'] = array(
		'id' 				=> 'home_posts_title',
		'label'   			=> __( 'Enter the home featured posts section title', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'text',
		'default' 			=> 'Featured Posts',
		'active_callback' 	=> 'is_front_page',
		'transport'			=> 'postMessage'
	);

	$options['home_posts_subtitle'] = array(
		'id' 				=> 'home_posts_subtitle',
		'label'   			=> __( 'Enter the home featured posts section subtitle', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'text',
		'default' 			=> 'Occaecati curabitur autem mollit! Vestibulum veritatis. Aliquam orci cumque curabitur.',
		'active_callback' 	=> 'is_front_page',
		'transport'			=> 'postMessage'
	);

	$options['home_posts_cat'] = array(
		'id' 				=> 'home_posts_cat',
		'label'   			=> __( 'Home Posts Category', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'select',
		'choices' 			=> $options_cats,
		'default' 			=> '',
		'active_callback' 	=> 'is_front_page'
	);

	// Blog
	$section = 'blog';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Blog', 'gateway' ),
		'priority' 		=> '30',
		'description' 	=> __( 'Blog Page Options', 'gateway' ),
		'panel' 		=> $panel
	);

	$options['blog_title'] = array(
		'id' 				=> 'blog_title',
		'label'   			=> __( 'Enter the blog page title', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'text',
		'default' 			=> 'Blog Page',
		'active_callback' 	=> 'is_home',
		'transport'			=> 'postMessage'
	);

	$options['blog_subtitle'] = array(
		'id' 				=> 'blog_subtitle',
		'label'   			=> __( 'Enter the blog page subtitle', 'gateway' ),
		'section' 			=> $section,
		'type'    			=> 'text',
		'default' 			=> 'Occaecati curabitur autem mollit. Vestibulum veritatis orci.',
		'active_callback' 	=> 'is_home',
		'transport'			=> 'postMessage'
	);

	// Footer
	$section = 'footer';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Footer', 'gateway' ),
		'priority' 		=> '40',
		'description' 	=> __( 'Footer options.', 'gateway' ),
		'panel' 		=> $panel
	);

	$options['footer_copyright'] = array(
		'id' 			=> 'footer_copyright',
		'label'   		=> __( 'Footer copyright text.', 'gateway' ),
		'section' 		=> $section,
		'type'    		=> 'textarea',
		'default' 		=> __( 'Copyright 2014 <a href="#">Rescue Themes</a>. All Rights Reserved.', 'gateway'),
		'transport'		=> 'postMessage'
	);

	// Styles
	$section = 'style';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Style', 'gateway' ),
		'priority' 		=> '50',
		'description' 	=> __( 'Site wide style options.', 'gateway' ),
		'panel' 		=> $panel
	);

	$options['main_color'] = array(
		'id' 			=> 'main_color',
		'label'   		=> __( 'Main sitewide accent color.', 'gateway' ),
		'section' 		=> $section,
		'type'    		=> 'color',
		'default' 		=> $primary_color,
		'transport'		=> 'postMessage'
	);

	$options['main_color_hover'] = array(
		'id' 		=> 'main_color_hover',
		'label'   	=> __( 'Main sitewide accent hover color.', 'gateway' ),
		'section' 	=> $section,
		'type'    	=> 'color',
		'default' 	=> $primary_hover_color
	);

	$upgrade_link = "https://rescuethemes.com/wordpress-themes/gateway-plus/?r=gwc";

/**
 * Gateway Plus Upgrade Options
 *
 */
	// Plus: Sidebar
	$section = 'plus-sidebar';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Layout', 'gateway' ),
		'priority'	 	=> '50',
		'description' 	=> '',
		'panel' 		=> $panel
	);

	$options['layout-plus'] = array(
	    'id' => 'layout-plus',
	    'label' => __( 'Sidebar Layout', 'gateway' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Adjust the inner sidebar position to display on the right or left side of your content.</p>', 'gateway' )
	    ),
	    'description' => sprintf( __( '<a target="_blank" href="%1$s">Get access to the sidebar layout option</a>', 'gateway' ), esc_url( $upgrade_link ) )

	);

	// Plus: Typography
	$section = 'plus-typography';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Typography', 'gateway' ),
		'priority'	 	=> '50',
		'description' 	=> '',
		'panel' 		=> $panel
	);

	$options['typography-plus'] = array(
	    'id' => 'typography-plus',
	    'label' => __( 'Advanced Typography Settings', 'gateway' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>You\'ll have access to 500+ Google Fonts along with font size, weight, style, transform, line height, and spacing settings for every section:</p><ul><li>Headers and Content</li><li>Navigation</li><li>Sidebar</li><li>Footer</li><li>Copyright</li><li>and more!</li></ul>', 'gateway' )
	    ),
	    'description' => sprintf( __( '<a target="_blank" href="%1$s">Get access to typography settings</a>', 'gateway' ), esc_url( $upgrade_link ) )
	);

	// Plus: Colors
	$section = 'plus-colors';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Colors', 'gateway' ),
		'priority'	 	=> '55',
		'description' 	=> '',
		'panel' 		=> $panel
	);

	$options['colors-plus'] = array(
	    'id' => 'colors-plus',
	    'label' => __( 'Advanced Color Settings', 'gateway' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Fine tune your site design with an unlimited number of color options for each section of the site:</p><ul><li>Backgrounds</li><li>Navigation</li><li>Links and Fonts</li><li>Footer</li><li>and more!</li></ul>', 'gateway' )
	    ),
	    'description' => sprintf( __( '<a target="_blank" href="%1$s">Get access to more color settings</a>', 'gateway' ), esc_url( $upgrade_link ) )
	);

	// Plus: Home Slider
	$section = 'plus-home-slider';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'Home Slider', 'gateway' ),
		'priority'	 	=> '60',
		'description' 	=> '',
		'panel' 		=> $panel
	);

	$options['home-slider-plus'] = array(
	    'id' => 'home-slider-plus',
	    'label' => __( 'Home Hero Section Slider', 'gateway' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Transform your home hero section from a static background image to a smooth image slider with options to change the slider speed, duration, overlay color, and overlay opacity.</p>', 'gateway' ),
	    ),
	    'description' => sprintf( __( '<a target="_blank" href="%1$s">Get access to the home slider</a>', 'gateway' ), esc_url( $upgrade_link ) )
	);

	// Plus: WooCommerce
	$section = 'plus-woocommerce';

	$sections[] = array(
		'id' 			=> $section,
		'title' 		=> __( 'eCommerce Shop', 'gateway' ),
		'priority'	 	=> '65',
		'description' 	=> '',
		'panel' 		=> $panel
	);

	$options['woocommerce-plus'] = array(
	    'id' => 'woocommerce-plus',
	    'label' => __( 'WooCommerce', 'gateway' ),
	    'section' => $section,
	    'type' => 'content',
	    'input_attrs' => array(
	        'content' => __( '<p>Gateway Plus provides compatibility with the world\'s most popular ecommerce system, WooCommerce. Whether it\'s physical products, music files, or your time, it\'s all possible.</p>', 'gateway' )
	    ),
	    'description' => sprintf( __( '<a target="_blank" href="%1$s">Get access to ecommerce support</a>', 'gateway' ), esc_url( $upgrade_link ) )
	);

	// Adds the sections panels to the $options array
	$options['sections'] = $sections;
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_gateway_options' );