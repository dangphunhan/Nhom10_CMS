<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class flatresponsive_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . 'inc/customizer-extras/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'flatresponsive_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new flatresponsive_Customize_Section_Pro(
				$manager,
				'flatresponsive-upsells',
				array(
					'title'    => esc_html__( 'Flat Responsive Pro', 'flat-responsive' ),
					'pro_text' => esc_html__( 'Get Pro', 'flat-responsive' ),
					'pro_url'  => esc_url( 'https://www.styledthemes.com/themes/flat-responsive/?utm_source=FreeThemes&utm_medium=Customizer&utm_campaign=Flat_Responsive' ),
					'priority' => 0
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'flatresponsive-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . 'js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'flatresponsive-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . 'css/customize-controls.css' );
	}
}

// Doing this customizer thang!
flatresponsive_Customize::get_instance();
