<?php

namespace Abolch\App;

class ThemeSupport {
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'addSupport' ] );
	}

	public function addSupport() {
		add_theme_support( 'widgets' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		] );

		add_theme_support( 'custom-logo', [
			'height'      => 100,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		] );

		add_theme_support( 'custom-background' );
		/*
        add_theme_support( 'custom-background', apply_filters('abolch_custom_background_args'[
			              'default-color'      => '#cccccc',
			              'default-image'       => '',

		              ])    )
        */
	}
}