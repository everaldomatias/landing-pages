<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://everaldo.dev
 * @since      1.0.0
 *
 * @package    Landing_Pages
 * @subpackage Landing_Pages/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Landing_Pages
 * @subpackage Landing_Pages/admin
 * @author     Everaldo Matias <aoseudispor@everaldo.dev>
 */
class Landing_Pages_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Landing_Pages_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Landing_Pages_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/landing-pages-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Landing_Pages_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Landing_Pages_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/landing-pages-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Admin notices
	 */
	public function admin_notices() {
		if ( ! is_plugin_active( 'pods/init.php' ) ) {
			$class = 'notice notice-error';
			$message = __( 'O plugin Landing Pages depende do plugin Pods ??? Campos e Formatos de Conte??do Customizados.', 'landing-pages' );
	
			printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
		}
	}

}
