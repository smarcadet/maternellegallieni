<?php do_action( 'main_bottom' ); ?>
</section> <!-- .main -->
<?php get_sidebar( 'primary' ); ?>
<?php do_action( 'after_main' ); ?>
</div><!-- .max-width -->
</div><!-- .primary-container -->

<footer id="site-footer" class="mg-footer" role="contentinfo">
  <div class="mg-footer-bottom">  
    <div class="max-width">
      <p class="mg-footer-col">
      <?php
        // query for the about page
        $your_query = new WP_Query( 'pagename=copyright' );
        // "loop" through query (even though it's just one page) 
        while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
        endwhile;
        // reset post data (important!)
        wp_reset_postdata();
      ?> 
      &copy; Maternelle Gallieni<br>
      Design, illustrations et code par <a href="http://www.marcasteph.com">marcasteph</a></p>
      <p class="mg-footer-col drawing"><img src="<?php bloginfo('stylesheet_directory'); ?>/src/assets/img/draw.jpg" alt="Cours d'école, jeux"></p>
    </div>
  </div>
</footer>
</div><!-- .overflow-container -->

<?php do_action( 'body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>