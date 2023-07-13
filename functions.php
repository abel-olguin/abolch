<?php
/**
 * @package abolch
 */


use Abolch\App\Abolch;
use Abolch\App\Pages;
use Abolch\App\ThemeSupport;

require_once( __DIR__ . '/App/WpHelper.php' );
require_once( __DIR__ . '/App/Abolch.php' );
require_once( __DIR__ . '/App/ThemeSupport.php' );
require_once( __DIR__ . '/App/Pages.php' );
require_once( __DIR__ . '/App/Menu.php' );

new Abolch();
new ThemeSupport();
new Pages();

