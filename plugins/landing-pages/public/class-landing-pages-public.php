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

		wp_enqueue_style( 'google-font-outfit', 'https://fonts.googleapis.com/css2?family=Outfit:wght@200;300;400;500;600;700;800;900&display=swap', array(), $this->version, false );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'assets/css/landing-pages-public.css', array(), $this->version, 'all' );

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
		if ( is_singular( 'seller_lp' ) ) {
			wp_dequeue_style( 'twenty-twenty-one-style' );
			wp_dequeue_style( 'twentytwenty-style' );
		}
	}

	/**
	 * Add custom body class
	 */
	public function lp_body_class( $classes ) {

		if ( is_single() && is_singular( 'seller_lp' ) ) {
			$model_lp = get_post_meta( get_the_ID(), 'model_lp', true );

			if ( $model_lp ) {
				$model_lp = str_replace( '_', '-', $model_lp );
				$classes[] = 'lp-model lp-' . esc_attr( $model_lp );
			}
		}

		return $classes;

	}

	/**
	 * Load template of the seller
	 * @todo Set template default
	 */
	public function lp_template_include( $template ) {

		if ( is_single() && is_singular( 'seller_lp' ) ) {
			$model_lp = get_post_meta( get_the_ID(), 'model_lp', true );

			if ( $model_lp ) {
				$model_lp = str_replace( '_', '-', $model_lp );
				$template_lp = plugin_dir_path( __DIR__ ) . 'templates/' . $model_lp  . '.php';

				if ( file_exists( $template_lp ) ) {
					return $template_lp;
				}
			}

		}

		return $template;
	}

}
