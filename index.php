<?php
/**
 * Plugin Name: Elementor Comming Soon Widget
 * Description: An Elementor widgets that renders a count down seconds for a given date 
 * Plugin URI:  https://kiaboluki.com/elementor-widgets/comming-soon
 * Version:     1.0.0
 * Author:      Kia Boluki
 * Author URI:  https://kiaboluki.com/
 * Text Domain: elementor-comming-soon-widget
 *
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_elementor_comming_soon_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/elementor-comming-soon-widget.php' );

	$widgets_manager->register( new \register_elementor_comming_soon_widget() );

}
add_action( 'elementor/widgets/register', 'register_elementor_comming_soon_widget' );