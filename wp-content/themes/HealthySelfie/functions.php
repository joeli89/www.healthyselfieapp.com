<?php
	
	/* ==== MENUS ==== */
		//Allows us to have menus in our admin panel
		add_theme_support('menus');
		// Allows us to have the Manage Locations
		function register_theme_menus() {
			register_nav_menus(
				array(
					'primary-menu' => __('Primary Menu')
				)
			);
		}
		add_action('init', 'register_theme_menus');

	/* ==== Featured Images ==== */
		add_theme_support('post-thumbnails');


	/* ===== excerpt length ===== */
	function wpt_excerpt_length( $length ) {
		return 30;
	}
	add_filter('excerpt_length', 'wpt_excerpt_length', 999);


	/* ===== WIDGETS ===== */
	function wpt_create_widget($name, $id, $description) {

		register_sidebar(array(
			'name'          => __( $name ),
			'id'            => $id,
			'description'   => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="module-heading">',
			'after_title'   => '</h3>' 
		));

	}
	wpt_create_widget('Products Sidebar', 'page', 'Displays on the side of products.');
	wpt_create_widget('Blog Slider', 'blog-slider', 'Displays a slider on blog.');
	wpt_create_widget('Blog', 'blog', 'Displays a sidebar on the blog.');
	wpt_create_widget('Subscribe', 'subscribe', 'Displays a subscribe panel.');
	wpt_create_widget('Blog Homepage', 'bloghomepage', 'Displays blog on homepage');
	wpt_create_widget('Twitter Feed', 'twitterfeed', 'Displays Twitter Feed on homepage');
	wpt_create_widget('Instagram', 'instagram', 'Displays instagram on homepage');




	function wpt_theme_styles() {

		/* ===== STYLESHEETS ===== */
		wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style('bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('animate_css', get_template_directory_uri() . '/css/animate.css');
		wp_enqueue_style('hover_min_css', get_template_directory_uri() . '/css/hover-min.css');
		wp_enqueue_style('media-queries', get_template_directory_uri() . '/css/media-queries.css');
		wp_enqueue_style('simple_sidebar', get_template_directory_uri() . '/css/simple-sidebar.css');
		wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
		wp_enqueue_style('styles_css', get_template_directory_uri() . '/css/styles.css');
		
		

		/* ===== FONTS & ICONS ===== */
		wp_enqueue_style('font_awesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
		wp_enqueue_style('ThirstyScript', get_template_directory_uri() . '/fonts/ThirstyScript.otf');
		wp_enqueue_style('Oswald_css', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
		wp_enqueue_style('styles_css', get_template_directory_uri() . '/css/styles.css');
		/*Glyphicons*/
		wp_enqueue_style('glyphicons_regular_eot', get_template_directory_uri() . '/fonts/glyphicons-halflings-regular.eot');
		wp_enqueue_style('glyphicons_regular_svg', get_template_directory_uri() . '/fonts/glyphicons-halflings-regular.svg');
		wp_enqueue_style('glyphicons_regular_ttf', get_template_directory_uri() . '/fonts/glyphicons-halflings-regular.ttf');
		wp_enqueue_style('glyphicons_regular_woff', get_template_directory_uri() . '/fonts/glyphicons-halflings-regular.woff');
		/*Ionicons*/
		wp_enqueue_style('ionicons_css', get_template_directory_uri() . '/css/ionicons.css');
		wp_enqueue_style('ionicons_eot', get_template_directory_uri() . '/fonts/ionicons.eot');
		wp_enqueue_style('ionicons_svg', get_template_directory_uri() . '/fonts/ionicons.svg');
		wp_enqueue_style('ionicons_ttf', get_template_directory_uri() . '/fonts/ionicons.ttf');
		wp_enqueue_style('ionicons_woff', get_template_directory_uri() . '/fonts/ionicons.woff');
		/*Flexslider*/
		wp_enqueue_style('flexslider_eot', get_template_directory_uri() . '/fonts/flexslider-icon.eot');
		wp_enqueue_style('flexslider_svg', get_template_directory_uri() . '/fonts/flexslider-icon.svg');
		wp_enqueue_style('flexslider_ttf', get_template_directory_uri() . '/fonts/flexslider-icon.ttf');
		wp_enqueue_style('flexslider_woff', get_template_directory_uri() . '/fonts/flexslider-icon.woff');
		/* ===== MAIN STYLESHEET ===== */
		wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');

	}
	add_action('wp_enqueue_scripts', "wpt_theme_styles");


	function wpt_theme_js() {

		wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
		wp_enqueue_script('bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
		wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true);
		wp_enqueue_script('scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);

	}
	add_action('wp_enqueue_scripts', 'wpt_theme_js');




/*Gets rid of the default height and width attributes*/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/* ==== ALLOWS SVGs ==== */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Add Class to Gravatar
add_filter('get_avatar', 'twbs_avatar_class');
function twbs_avatar_class($class) {
	$class = str_replace("class='avatar", "class='avatar img-circle gravatar", $class);
	return $class;
}





















?>