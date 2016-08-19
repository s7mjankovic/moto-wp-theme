<?php
/**
 * Load styles to theme
 *
 * @package Otrs
 */

/**
 * Class FrontLoadStyles
 */
class FrontLoadStyles {

	/**
	 * Load styles into theme
	 *
	 * @wp-hook wp_enqueue_scripts
	 *
	 * @return void
	 */
	public function load() {

		$styles = $this->register();
		foreach ( $styles as $key => $value ) {
			wp_enqueue_style( $key, $value );
		}
	}

	/**
	 * Return defined array of styles to load on front-end
	 *
	 * @return array
	 */
	private function register() {
		$dir = get_stylesheet_directory_uri();

		return array(
			'bootstrap'          => $dir . '/assets/css/bootstrap.min.css',
			/*'bootstrap-theme'    => $dir . '/assets/css/bootstrap-theme.min.css',
			'font-awesome-local' => $dir . '/assets/bower_components/components-font-awesome/css/font-awesome.min.css',
			'animate'            => $dir . '/assets/bower_components/animate.css/animate.min.css',
			'owl-carousel'       => $dir . '/assets/owl-carousel/owl.carousel.css',
			'owl-theme'          => $dir . '/assets/owl-carousel/owl.theme.css',
			'owl-transitions'    => $dir . '/assets/owl-carousel/owl.transitions.css',
			'magnific-css'         => $dir . '/css/magnific-popup.css',*/
			'custom-css'         => $dir . '/assets/css/custom.css',
			
			'main-css'     => $dir . '/assets/bower_components/style.css'
		);
	}
}