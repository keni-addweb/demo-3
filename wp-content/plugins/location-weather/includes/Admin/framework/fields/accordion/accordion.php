<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: accordion
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CSF_Field_accordion' ) ) {
  class CSF_Field_accordion extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $unallows = array( 'accordion' );

      echo $this->field_before();

      echo '<div class="splwt-lite-accordion-items">';

      foreach ( $this->field['accordions'] as $key => $accordion ) {

        echo '<div class="splwt-lite-accordion-item">';

          $icon = ( ! empty( $accordion['icon'] ) ) ? 'splwt-lite--icon '. $accordion['icon'] : 'splwt-lite-accordion-icon fas fa-angle-right';

          echo '<h4 class="splwt-lite-accordion-title">';
          echo '<i class="'. esc_attr( $icon ) .'"></i>';
          echo esc_attr( $accordion['title'] );
          echo '</h4>';

          echo '<div class="splwt-lite-accordion-content">';

          foreach ( $accordion['fields'] as $field ) {

            if ( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

            $field_id      = ( isset( $field['id'] ) ) ? $field['id'] : '';
            $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';
            $field_value   = ( isset( $this->value[$field_id] ) ) ? $this->value[$field_id] : $field_default;
            $unique_id     = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .']' : $this->field['id'];

            SPLW::field( $field, $field_value, $unique_id, 'field/accordion' );

          }

          echo '</div>';

        echo '</div>';

      }

      echo '</div>';

      echo $this->field_after();

    }

  }
}