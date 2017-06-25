<?php
/**
 * The Template for displaying all single posts.
 *
 * @package frontizofs
 */

get_header(); ?>

<section>
	<div>
		<div class="row">						
			<div class="8u skel-cell-mainContent">
                 <div id="primary" class="content-area">
                     <main id="main" class="site-main" role="main">


						<?php while ( have_posts() ) : the_post(); ?>
                
                            <?php get_template_part( 'content', 'single' ); ?>
                
                            <?php frontizofs_post_nav(); ?>
                
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || '0' != get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                
                        <?php endwhile; // end of the loop. ?>
                
                        </main><!-- #main -->
                    </div><!-- #primary -->
 </div><!-- #skel-cell-mainContent -->
                          
          <?php get_sidebar(); ?>
                  
      </div><!-- #row -->
   </div><!-- #main -->
 </section>

<?php get_footer(); ?>