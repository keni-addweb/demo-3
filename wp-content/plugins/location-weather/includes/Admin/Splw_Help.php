<?php
/**
 * This is to plugin help page.
 *
 * @package location-weather
 */

namespace ShapedPlugin\Weather\Admin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Splw_Help {

	private static $_instance;

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'help_page' ), 100 );
	}

	public static function getInstance() {
		if ( ! self::$_instance ) {
			self::$_instance = new Splw_Help();
		}

		return self::$_instance;
	}

	/**
	 * Add SubMenu Page
	 */
	function help_page() {
		add_submenu_page( 'edit.php?post_type=location_weather', __( 'Location Weather Help', 'location-weather' ), __( 'Help', 'location-weather' ), 'manage_options', 'splw_help', array( $this, 'help_page_callback' ) );
	}

	/**
	 * Help Page Callback
	 */
	public function help_page_callback() {
		?>
		<div class="wrap about-wrap sp-splw-help">
			<h1><?php _e( 'Welcome to Location Weather!', 'location-weather' ); ?></h1>
			<p class="about-text">
			<?php
			_e( 'Thank you for installing Location Weather! You\'re now running the most popular Location Weather plugin. This video will help you get started with the plugin.', 'location-weather' );
			?>
				</p>
			<div class="wp-badge"></div>

			<hr>

			<div class="headline-feature feature-video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLoUb-7uG-5jO40tUXGTe8cyGrbvMzZBqc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<hr>

			<div class="feature-section three-col">
				<div class="col">
					<div class="sp-lw-feature ">
						<h3><i class="sp-font fas fa-headset"></i> Need Help?</h3>
						<p>Stuck with any issues? No worries! Our Expert Support Team is always ready to help you out promptly.</p>
						<a href="https://shapedplugin.com/support/" target="_blank" class="lw-help-button">Get Support</a>
					</div>
				</div>
				<div class="col">
					<div class="sp-lw-feature">
						<h3><i class="sp-font fa fa-file-text" ></i> Looking for Documentation?</h3>
						<p>Check out our documentation page and more information about what you can do with Location Weather.</p>
						<a href="https://shapedplugin.com/docs/docs/location-weather/overview/" target="_blank" class="lw-help-button">Documentation</a>
					</div>
				</div>
				<div class="col">
					<div class="sp-lw-feature">
						<h3><i class="sp-font fas fa-rocket" ></i>Need Paid Support?</h3>
						<p>Paid users of the premium plugin can receive personalized support and faster response times.</p>
						<a href="https://shapedplugin.com/plugin/location-weather-pro/" target="_blank" class="lw-help-button">Go Premium</a>
					</div>
				</div>
			</div>
			<hr>
			<div class="plugin-section">
				<div class="sp-plugin-section-title">
					<h2>Join 10,000+ Happy Users!</h2>
					<h4>Supercharge Location Weather with powerful features! Get Location Weather Pro today and Enjoy it!</h4>
					<a href="https://shapedplugin.com/plugin/location-weather-pro/" target="_blank" class="lw-help-button">Upgrade to Pro</a>
				</div>
			</div>

		<?php
	}

}
