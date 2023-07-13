<?php

namespace Abolch\App;

class Menu {
	const MAIN_LOCATION   = 'abolch-main-menu';
	const FOOTER_LOCATION = 'abolch-footer-1-menu';

	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'addMenu' ] );
	}

	public static function render( $location, $template ) {
		$navItems  = wp_get_nav_menu_items( self::getMenuByLocation( $location ) );
		$menuItems = [];
		if ( ! $navItems ) {
			return;
		}
		foreach ( $navItems as $item ) {
			if ( ! $item->menu_item_parent ) {
				$menuItems[ $item->ID ]           = $item;
				$menuItems[ $item->ID ]->children = [];
			} else {
				$menuItems[ $item->menu_item_parent ]->children[] = $item;
			}
		}
		WpHelper::view( "menu-{$template}", compact( 'menuItems' ) );
		// compact('menuItems') == ['menuItems' => $menuItems]
	}

	public static function getMenuByLocation( $location ) {
		$locations = get_nav_menu_locations();

		return wp_get_nav_menu_object( $locations[ $location ] );
	}

	public function addMenu() {
		register_nav_menus(
			[
				self::MAIN_LOCATION   => __( 'Primary', 'abolch' ),
				self::FOOTER_LOCATION => __( 'Footer 1', 'abolch' ),
			]
		);
	}
}