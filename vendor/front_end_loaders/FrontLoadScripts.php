<?php

/**
 * Created by PhpStorm.
 * User: nenadpaic
 * Date: 10/16/15
 * Time: 2:55 PM
 */
class FrontLoadScripts {

	/**
	 * Load scripts into theme
	 *
	 * @wp-hook wp_enqueue_scripts
	 *
	 * @return void
	 */
	public function load() {

		$styles = $this->register();
		foreach ( $styles as $key => $value ) {
			wp_enqueue_script( $key, $value['url'], $value['dep'], $value['version'], $value['footer'] );
		}
	}

	/**
	 * Return defined array of scripts to load on front-end
	 *
	 * @return array
	 */
	private function register() {
		$dir = get_stylesheet_directory_uri();

		return array(
			'bootstrap-script'    => array(
				'url'     => $dir . '/assets/js/bootstrap.min.js',
				'dep'     => array( 'jquery' ),
				'version' => '1.0',
				'footer'  => true,
			),
			
			'custom-script'       => array( 'url'     => $dir . '/assets/js/custom.js',
			                                'dep'     => array( 'jquery' ),
			                                'version' => '1.0',
			                                'footer'  => true,
			),
			/*
			'owl-carousel-script' => array( 'url'     => $dir . '/assets/owl-carousel/owl.carousel.min.js',
			                                'dep'     => array( 'jquery' ),
			                                'version' => '1.0',
			                                'footer'  => true,
			),
			'jq-mob'              => array( 'url'     => $dir . '/assets/assets/jq-mob.min.js',
			                                'dep'     => array( 'jquery' ),
			                                'version' => '1.0',
			                                'footer'  => true,
			),
			'magnific-js'              => array( 'url'     => $dir . '/js/jquery.magnific-popup.min.js',
			                                'dep'     => array( 'jquery' ),
			                                'version' => '1.0',
			                                'footer'  => true,
			),
			*/

		);
	}
}