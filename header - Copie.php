<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marclafon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Marc Lafon, graphiste</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="marc, lafon, graphiste, graphisme, illustrateur, illustration, affiche, cinéma, design, webdesign" />
    <meta name="description" content="Graphiste et illustrateur indépendant, intervenant dans le champ large du design graphique. Je travaille aussi bien sur des affiches, que de l’édition, de l’identité visuelle ou bien de web design. N’hésitez pas à me contacter.">
    
    <!-- Open Graph data fb -->

<meta property="og:title" content="Marc Lafon"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://marclafon-design.fr"/>
<meta property="og:image" content="http://marclafon-design.fr/wp-content/themes/marclafon/screenshot.png"/>
<meta property="og:description" content="Graphiste et illustrateur indépendant, intervenant dans le champ large du design graphique. Je travaille aussi bien sur des affiches, que de l’édition, de l’identité visuelle ou bien de web design. N’hésitez pas à me contacter."/>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat" />

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'marclafon' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'marclafon' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
