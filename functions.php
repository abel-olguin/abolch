<?php
/**
 * @package abolch
 */


use Abolch\App\Abolch;
use Abolch\App\ThemeSupport;

require_once( __DIR__ . '/App/Abolch.php' );
require_once( __DIR__ . '/App/ThemeSupport.php' );

new Abolch();
new ThemeSupport();