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
function load_css(){
  wp_register_style('')
?>
