<?php

namespace Abolch\App;

class Menu {
	public static function render( $name, $template ) {
		$navItems  = wp_get_nav_menu_items( $name );
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
}