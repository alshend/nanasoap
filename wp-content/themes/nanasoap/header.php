<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nanasoap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main-container">
	<header id="main-header" class="header">
		<div class="site-branding">
			<?php
			the_custom_logo();
            $args = array(
                'theme_location'    => 'main-menu',
                'container_class'   => 'main-menu-container',
            );
			wp_nav_menu($args);

			$nanasoap_description = get_bloginfo( 'description', 'display' );
			if ( $nanasoap_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $nanasoap_description; ?></p>
			<?php endif; ?>
		</div>
	</header>
	<div id="content" class="site-content">
