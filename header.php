<?php
/**
 * @package abolch
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php Abolch\App\Menu::render( 'primary', 'default' ); ?>
<main id="main-content" class="site">
