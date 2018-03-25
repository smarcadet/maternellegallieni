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

		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=lien-conseil-decole' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			wp_reset_postdata();
		?>

		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=bloc-horaire-ecole' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			wp_reset_postdata();
		?>
	</div>

	<aside class="sidebar sidebar-primary" id="sidebar-primary" role="complementary">
			<h1 class="screen-reader-text"><?php esc_html_e('Sidebar', 'period'); ?></h1>
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=liens-ancres' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=78-2' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=medecin-scolaire' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=psychologue-scolaire' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=enseignant-referent' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
			<!-- <section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=inspecteur-education' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section> -->
			<section class="widget">
				<?php
					// query for the about page
					$your_query = new WP_Query( 'pagename=maison-famille' );
					// "loop" through query (even though it's just one page) 
					while ( $your_query->have_posts() ) : $your_query->the_post();
						the_content();
					endwhile;
					// reset post data (important!)
					wp_reset_postdata();
				?>
			</section>
	</aside>

	<div id="asso" class="mg-container-asso">
		<div class="mg-col">
			<?php
				// query for the about page
				$your_query = new WP_Query( 'pagename=associations' );
				// "loop" through query (even though it's just one page) 
				while ( $your_query->have_posts() ) : $your_query->the_post();
					the_content();
				endwhile;
				// reset post data (important!)
				wp_reset_postdata();
			?>
		</div>
		<div class="mg-col">
			<?php
				// query for the about page
				$your_query = new WP_Query( 'pagename=asso-representees' );
				// "loop" through query (even though it's just one page) 
				while ( $your_query->have_posts() ) : $your_query->the_post();
					the_content();
				endwhile;
				// reset post data (important!)
				wp_reset_postdata();
			?>
		</div>
	</div>

	<div id="hobbies" class="mg-container-hobbies">
		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=bloc-centre-de-loisirs' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			wp_reset_postdata();
		?>
	</div>

	<div id="meal" class="mg-container-meal">
		<?php
			// query for the about page
			$your_query = new WP_Query( 'pagename=bloc-menu-cantine' );
			// "loop" through query (even though it's just one page) 
			while ( $your_query->have_posts() ) : $your_query->the_post();
				the_content();
			endwhile;
			// reset post data (important!)
			wp_reset_postdata();
		?>
		<div class="mg-iframe">
			<iframe class="wonderplugin-pdf-iframe" src="http://localhost:8888/wp-content/plugins/wonderplugin-pdf-embed/pdfjs/web/viewer.html?file=http%3A%2F%2Flocalhost%3A8888%2Fwp-content%2Fuploads%2Fmenu_cantine.pdf%3F<?php echo date( 'Y-m-dH');?>" width="100%" height="515px" style="border:0;"></iframe>
		</div>
	</div>

<?php get_footer(); ?>