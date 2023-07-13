<?php
/**
 * @package abolch
 */


use Abolch\App\Abolch;
use Abolch\App\Pages;
use Abolch\App\ThemeSupport;

require_once( __DIR__ . '/App/Abolch.php' );
require_once( __DIR__ . '/App/ThemeSupport.php' );
require_once( __DIR__ . '/App/Pages.php' );

new Abolch();
new ThemeSupport();
new Pages();

function entro_en_el_tema( $primero, $segundo ) {
	var_dump( $primero );
}

add_action( 'abolch_entra_el_tema', 'entro_en_el_tema', 10, 3 );