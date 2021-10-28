/*
*This is functions file for myNewTheme WordPress theme
*/
<?php
	/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
	// Theme Support
	function wpb_theme_setup(){
		// Nav Menus
		register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'THEMENAME' ),
	));
  }

  //load stylesheets
function load_css(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false /*version*/, 'all'); 
    /*get_template_directory() 
     *wp_register_style()
     *array()
     * */
    wp_enqueue_style('bootstrap');
    wp_register_style('main', get_template_directory_uri() . '/css/main.min.css', array(), false /*version*/, 'all'); 
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// load jQuery
function load_js(){
  wp_enqueue_script('jquery');
  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load_js');
    

//theme support
add_theme_support('menus');

//menus
register_nav_menus(

  array(

      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
    )
  )
?>
