<?php
/**
 * Plugin dashboard access capability.
 *
 * @return void
 */
function location_weather_dashboard_capability() {
    return apply_filters( 'location_weather_access_capability', 'manage_options' );
}
