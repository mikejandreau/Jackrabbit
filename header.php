<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jackrabbit
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

<body id="page-top" <?php body_class('body'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jackrabbit' ); ?></a>

<div class="header-wrap">
	<header id="masthead" class="site-header">
			<div class="site-branding">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
					echo '<a class="custom-logo-link" href="' . esc_url( home_url( '/' ) ) . '" rel="home"><img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
			} else {
			        echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">'. get_bloginfo( 'name' ) .'</a></h1>';
			}?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg class="toggle-open" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
					<svg class="toggle-close" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
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
</div>


<div class="site-content">
	
	<?php if ( is_front_page() ) : ?>
		<div class="banner-wrap">
			<div class="banner">
			<?php the_title( '<h1 class="entry-title"><span class="screen-reader-text">Article Title: </span>', '</h1>' ); ?>
			</div>
		</div>
		

	<?php elseif ( is_page( '404' ) ) : ?>
		<?php the_title( '<h1 class="entry-title"><span class="screen-reader-text">Article Title: </span>', '</h1>' ); ?>
		

	<?php else : ?>
		<div class="banner-wrap">
			<div class="banner">
			<?php the_title( '<h1 class="entry-title"><span class="screen-reader-text">Article Title: </span>', '</h1>' ); ?>
			</div>
		</div>

	<?php endif; ?>
	
<div class="main-wrap">
