<?php

namespace Abolch\App;

class Abolch {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'themeScripts' ] );
		add_action( 'after_setup_theme', [ $this, 'addMenu' ] );
	}

	public function addMenu() {
		register_nav_menus(
			[
				'abolch-main-menu'     => __( 'Primary', 'abolch' ),
				'abolch-footer-1-menu' => __( 'Footer 1', 'abolch' ),
			]
		);
	}

	public function themeScripts(): void {
		$this->scripts();
		$this->styles();
	}

	private function scripts(): void {
		wp_enqueue_script( 'abolch_main_script', get_template_directory_uri() . '/dist/js/main.ts', [ 'jquery' ],
		                   '0.9.0' );
	}

	private function styles(): void {
		wp_enqueue_style( 'abolch_main_style', get_template_directory_uri() . '/dist/css/main.css', [], '0.9.0' );
	}
}