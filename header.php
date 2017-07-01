<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>
<?php do_action( 'body_top' ); ?>
<a class="skip-content" href="#main"><?php _e( 'Press "Enter" to skip to content', 'period' ); ?></a>
<div id="overflow-container" class="overflow-container">
	<?php do_action( 'before_header' ); ?>
	<header class="site-header" id="site-header" role="banner">
		<div class="max-width">
			<div id="title-container" class="title-container">
				<h1 class="mg-header-logo">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/img/logo.png" alt="Maternelle Gallieni - Nogent sur Marne" class="mg-header-logo-img">
				</h1>
				<div class="mg-header-infos">
					<p class="mg-header-infos-address">
						<span>16 bvd Gallieni,</span>
						<strong>Nogent-sur-Marne</strong>
					</p>
					<a class="mg-header-infos-number" href="tel:0148733679">01 48 73 19 68</a>
					<a class="mg-header-infos-mail" href="mailto:direction@maternellegallieni.fr">direction@maternellegallieni.fr</a>
				</div>
			</div>
			<button id="toggle-navigation" class="toggle-navigation" name="toggle-navigation" aria-expanded="false">
				<span class="screen-reader-text"><?php _e( 'open menu', 'period' ); ?></span>
				<?php echo ct_period_svg_output( 'toggle-navigation' ); ?>
			</button>
		</div>
		<div id="menu-primary-container" class="menu-primary-container">
			<div class="icon-container">
				<?php ct_period_social_icons_output(); ?>
				<?php get_template_part( 'content/search-bar' ); ?>
			</div>
			<?php get_template_part( 'menu', 'primary' ); ?>
		</div>
	</header>
	<?php do_action( 'after_header' ); ?>
	<div id="primary-container" class="primary-container">
		<div class="max-width">
			<section id="main" class="main" role="main">
				<?php do_action( 'main_top' );
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
				}
