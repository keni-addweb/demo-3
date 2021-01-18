<?php
namespace ShapedPlugin\Weather;

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

class Frontend {

	/**
	 * The constructor of the class.
	 */
	public function __construct() {
		new Frontend\Shortcode();
		new Frontend\Scripts();
	}
}
