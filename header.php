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

<body>

<header class="headerhome">

	
		<nav class="navbar navbar-default">
		<div class="container-fluid">
    <div class="navbar-header row">
		  <div class="col-xs-10">
      <a  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img  class="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" /></a>	  

	  </div>
		  <div class="col-xs-2">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  </div>

    </div>
    <div class="collapse navbar-collapse navbar-right" id="Navbar">
      <ul class="nav navbar-nav">
          
        <!--<li class="active"><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
          
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_class'     => 'nav navbar-nav',
                'menu_id'        => 'primary-menu',
                                ) );
                            ?>

      </ul>
    </div>
  </div>		
    </nav>
	
</header>

	<div id="content" class="site-content">
