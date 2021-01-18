<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: icon
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CSF_Field_icon' ) ) {
  class CSF_Field_icon extends CSF_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'button_title' => esc_html__( 'Add Icon', 'splwt-lite' ),
        'remove_title' => esc_html__( 'Remove Icon', 'splwt-lite' ),
      ) );

      echo $this->field_before();

      $nonce  = wp_create_nonce( 'csf_icon_nonce' );
      $hidden = ( empty( $this->value ) ) ? ' hidden' : '';

      echo '<div class="splwt-lite-icon-select">';
      echo '<span class="splwt-lite-icon-preview'. esc_attr( $hidden ) .'"><i class="'. esc_attr( $this->value ) .'"></i></span>';
      echo '<a href="#" class="button button-primary splwt-lite-icon-add" data-nonce="'. esc_attr( $nonce ) .'">'. wp_kses_post( $args['button_title'] ) .'</a>';
      echo '<a href="#" class="button splwt-lite-warning-primary splwt-lite-icon-remove'. esc_attr( $hidden ) .'">'. wp_kses_post( $args['remove_title'] ) .'</a>';
      echo '<input type="text" name="'. esc_attr( $this->field_name() ) .'" value="'. esc_attr( $this->value ) .'" class="splwt-lite-icon-value"'. $this->field_attributes() .' />';
      echo '</div>';

      echo $this->field_after();

    }

    public function enqueue() {
      add_action( 'admin_footer', array( &$this, 'add_footer_modal_icon' ) );
      add_action( 'customize_controls_print_footer_scripts', array( &$this, 'add_footer_modal_icon' ) );
    }

    public function add_footer_modal_icon() {
    ?>
      <div id="splwt-lite-modal-icon" class="splwt-lite-modal splwt-lite-modal-icon hidden">
        <div class="splwt-lite-modal-table">
          <div class="splwt-lite-modal-table-cell">
            <div class="splwt-lite-modal-overlay"></div>
            <div class="splwt-lite-modal-inner">
              <div class="splwt-lite-modal-title">
                <?php esc_html_e( 'Add Icon', 'splwt-lite' ); ?>
                <div class="splwt-lite-modal-close splwt-lite-icon-close"></div>
              </div>
              <div class="splwt-lite-modal-header">
                <input type="text" placeholder="<?php esc_html_e( 'Search...', 'splwt-lite' ); ?>" class="splwt-lite-icon-search" />
              </div>
              <div class="splwt-lite-modal-content">
                <div class="splwt-lite-modal-loading"><div class="splwt-lite-loading"></div></div>
                <div class="splwt-lite-modal-load"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }

  }
}
