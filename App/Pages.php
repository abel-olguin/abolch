<?php

namespace Abolch\App;

use WP_Error;

class Pages {
	public function __construct() {
		add_action( 'after_switch_theme', [ $this, 'createPages' ] );
	}

	public function createPages() {
		$this->home();
	}

	private function home() {
		$title    = __( 'Home', 'abolch' );
		$slug     = 'home';
		$template = 'page-templates/home.php';

		$pageAttributes = [
			'post_type'   => 'page',
			'post_title'  => $title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_name'   => $slug
		];

		if ( ! get_page_by_path( $slug ) ) {
			$pageId = wp_insert_post( $pageAttributes );

			if ( ! ( $pageId instanceof WP_Error ) ) {
				update_option( 'page_on_front', $pageId );
				update_option( 'show_on_front', 'page' );

				update_post_meta( $pageId, '_wp_page_template', $template );
			}
		}
	}
}