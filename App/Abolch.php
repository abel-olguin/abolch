<?php

namespace Abolch\App;

class Abolch {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', [ $this, 'themeScripts' ] );
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