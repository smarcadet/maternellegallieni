<div <?php post_class(); ?>>
	<article>
		<?php do_action( 'post_before' ); ?>
		<?php ct_period_featured_image(); ?>
		<div class="post-container">
			<div class='post-header'>
				<h1 class='post-title'><?php the_title(); ?></h1>
				<?php
					echo '<div class="post-byline">';
					get_template_part( 'content/post-byline' );
					get_template_part( 'content/post-categories' );
					echo '</div>';
				?>
			</div>
			<div class="post-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array(
					'before' => '<p class="singular-pagination">' . __( 'Pages:', 'period' ),
					'after'  => '</p>',
				) ); ?>
				<?php do_action( 'post_after' ); ?>
			</div>
		</div>
	</article>
</div>