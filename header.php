<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WP Talon
 * @since WP Talon 1.0
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?><html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<?php tha_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php if ( is_search() ) { // disable search engine indexing on search result pages ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/images/favicon.ico" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<?php tha_head_bottom(); ?>
</head>

<body <?php body_class(); ?>>
	<?php tha_body_top(); ?>
	<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
		<?php tha_header_top(); ?>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></div>
		</div>

		<nav id="site-navigation" role="navigation" class="site-navigation main-navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', '_s' ); ?></h1>
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
		<?php tha_header_bottom(); ?>
	</header><!-- #masthead .site-header -->
	<?php tha_header_after(); ?>

	<div id="main" class="site-main">
		<?php tha_content_top(); ?>
