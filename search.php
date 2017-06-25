<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package frontizofs
 */

get_header(); ?>
<section>
	<div>
     <?php if ( have_posts() ) : ?>
         <header class="major">
             <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'frontizofs' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
          </header><!-- .page-header -->               
       <?php endif; ?>
		<div class="row">						
			<div class="8u skel-cell-mainContent">
                <section id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
            
                    <?php if ( have_posts() ) : ?>
                         
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'search' ); ?>
            
                        <?php endwhile; ?>
            
                        <?php frontizofs_paging_nav(); ?>
            
                    <?php else : ?>
            
                        <?php get_template_part( 'content', 'none' ); ?>
            
                    <?php endif; ?>
            
                    </main><!-- #main -->
                </section><!-- #primary -->
                
            </div>
            <div class="4u">	
            	<section class="box">
                <?php get_search_form(); ?>
                </section>
            </div>
         </div>
         
      </div>
   </section>
<?php get_footer(); ?>
