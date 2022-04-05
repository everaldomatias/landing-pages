<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://everaldo.dev
 * @since      1.0.0
 *
 * @package    Landing_Pages
 * @subpackage Landing_Pages/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Landing_Pages
 * @subpackage Landing_Pages/public
 * @author     Everaldo Matias <aoseudispor@everaldo.dev>
 */
class Landing_Pages_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/landing-pages-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/landing-pages-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Dequeue default stylesheet of the single model_lp
	 */
	public function lp_dequeue_stylesheet() {
		if ( is_singular( 'model_lp' ) ) {
			wp_dequeue_style( 'twenty-twenty-one-style' );
		}
	}

	/**
	 * Load single template from plugin to single model_lp
	 */
	public function lp_template_include( $template ) {
		global $wp_query;
		
		if ( 'model_lp' == get_post_type( $wp_query->post->ID ) ) {
			if ( is_single( $wp_query->post->ID ) ) {
				$template = plugin_dir_path( __DIR__ ) . 'templates/single.php';
			}
		}

		return $template;
	}

}
