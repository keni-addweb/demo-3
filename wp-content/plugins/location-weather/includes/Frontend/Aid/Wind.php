<?php
/**
 * Weather class file.
 *
 * @package Location_Weather
 */

namespace ShapedPlugin\Weather\Frontend\Aid;

/**
 * The wind class representing a wind object.
 */
class Wind {
	/**
	 * @var Unit The wind speed.
	 */
	public $speed;

	/**
	 * @var Unit|null The wind direction.
	 */
	public $direction;

	/**
	 * Create a new wind object.
	 *
	 * @param Unit $speed     The wind speed.
	 * @param Unit $direction The wind direction.
	 *
	 * @internal
	 */
	public function __construct( Unit $speed, Unit $direction = null ) {
		$this->speed     = $speed;
		$this->direction = $direction;
	}
}
