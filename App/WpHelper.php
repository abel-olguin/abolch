<?php

namespace Abolch\App;

class WpHelper {

	public static function view( $template, $args ): void {
		echo self::getView( $template, $args );
	}

	public static function getView( $template, $args ): string {
		ob_start();
		get_template_part( "views/parts/{$template}", null, $args );
		$content = ob_get_contents();
		ob_clean();

		return $content;
	}
}