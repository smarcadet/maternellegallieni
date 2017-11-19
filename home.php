<?php get_header();

	get_template_part( 'content/archive-header' );

	do_action( 'after_archive_header' ); ?>

	<div class="mg-container-school">
		<div id="loop-container" class="loop-container">

			<?php
			if ( have_posts() ) :
				$i = 1;
					while (have_posts() && $i < 4) :
						the_post();
						ct_period_get_content_template();
					$i++;
				endwhile;
			endif;
			?>
		</div>

		<?php dynamic_sidebar('static_school'); ?>
	</div>

	<aside class="sidebar sidebar-primary" id="sidebar-primary" role="complementary">
			<h1 class="screen-reader-text"><?php esc_html_e('Sidebar', 'period'); ?></h1>
			<?php dynamic_sidebar( 'primary' ); ?>
	</aside>

	<div id="asso" class="mg-container-asso">
		<?php dynamic_sidebar('static_asso'); ?>
	</div>

	<div id="hobbies" class="mg-container-hobbies">
		<?php dynamic_sidebar('static_hobbies'); ?>
	</div>

	<div id="meal" class="mg-container-meal">
		<?php dynamic_sidebar('static_meal'); ?>
	</div>

<?php get_footer(); ?>