<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4W4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!-- DÉBUT CARROUSEL -->
		<?php
		if ( is_front_page()) : ?>
		<section class="carrousel">
				<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=wacom-tablet&color=000000" width="32" height="32"></div>
				<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=macbook&color=000000" width="32" height="32"></div>
				<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=installing&color=000000" width="32" height="32"></div>
				<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=gaming-mouse&color=000000" width="32" height="32"></div>
				<div><img src="https://s2.svgbox.net/illlustrations.svg?ic=coding&color=000000" width="32" height="32"></div> 
		</section>
		<section class="choixCarrousel">
			<a type="radio" id="un" name="case" value="1"> 1 </a>
			<a type="radio" id="deux" name="case" value="2"> 2 </a>
			<a type="radio" id="trois" name="case" value="3"> 3 </a>
			<a type="radio" id="quatre" name="case" value="4"> 4 </a>
			<a type="radio" id="cinq" name="case" value="5"> 5 </a>
		</section>
		<!-- <button id='un'>1</button> 
		<button id='deux'>2</button>
		<button id='trois'>3</button> -->
		<?php endif ?>
		<!-- FIN CARROUSEL -->

		<nav id="site-navigation" class="main-navigation">
			<button id="burger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<!-- <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=b51a00" width="32" height="32"> -->
				<div></div>
        		<div></div>
				<div class='ouvrirX3'></div>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
