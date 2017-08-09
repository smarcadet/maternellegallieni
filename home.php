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

	<div class="mg-container-center">
		<?php dynamic_sidebar('static_center'); ?>
	</div>

<?php get_footer(); ?>