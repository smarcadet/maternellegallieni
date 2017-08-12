<div <?php post_class(); ?>>
	<article>
		<div class="post-container">
			<div class='post-header'>
				<?php do_action( 'sticky_post_status' ); ?>
				<h2 class='mg-title mg-title--alpha'>
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
				</h2>
				<?php
					echo '<div class="post-byline">';
					get_template_part( 'content/post-byline' );
					get_template_part( 'content/post-categories' );
					echo '</div>';
				?>
			</div>
			<?php do_action( 'archive_post_before' ); ?>
			<?php ct_period_featured_image(); ?>
			<div class="post-content">
				<?php ct_period_excerpt(); ?>
			</div>
		</div>
	</article>
	<?php do_action( 'archive_post_after' ); ?>
</div>