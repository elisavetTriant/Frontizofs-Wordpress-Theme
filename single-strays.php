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
			<div class="12u skel-cell-mainContent">
                 <div id="primary" class="content-area">
                     <main id="main" class="site-main" role="main">


						<?php while ( have_posts() ) : the_post(); ?>
                
                			<!-- Content -->
								<article class="box is-post">
													
                                               	<div id="main_dog_post">
                                                    <section id="dog-bio" class="8u">  
                                                     	<div class="inner">       
                                                         <?php get_template_part( 'content', 'single' ); ?>
                                                        
                                                          <?php echo types_render_field( "youtube-video", array('width'=>'700') );?>
                                                          
                                                       <div>
                                                       
                                                     </section>
                                                     
                                                     <aside id="dog-info" class="4u">         
                                                         <section class="dog_short_list">
                                                             <header>
                                                                <h1>Πληροφορίες<h1>
                                                             </header>
                                                             <table>
                                                                <tr><th>Όνομα:</th><td><?php echo types_render_field( "name", array());?></td></tr>
                                                                <tr><th>Φύλο:</th><td><?php echo types_render_field( "sex", array() );?></td></tr>
                                                                <tr><th>Φυλή:</th><td><?php echo types_render_field( "breed", array());?></td></tr>
                                                                <tr><th>Ηλικία:</th><td><?php echo types_render_field( "age", array() );?></td></tr>
                                                                <tr><th>Κιλά:</th><td><?php echo types_render_field( "weight", array() );?></td></tr>
                                                                <tr><th>Στειρωμένο:</th><td><?php echo types_render_field( "neutered", array() );?></td></tr>
                                                                <tr><th>Ημερομηνία:</th><td> <?php echo types_render_field( "date", array() );?></td></tr>
                                                                <tr><th>Σημειώσεις:</th><td> <?php echo types_render_field( "special-notes", array() );?></td></tr>
                                                                <tr><th>Facebook:</th><td><?php echo types_render_field( "facebook-link", array("title" => "Δείτε και στο facebook",  'target'=>'_blank' ));?></td></tr>
                                                                       
                                                             </table>
                                                          </section>
                                                        
                                                     </aside>
                                                 </div>
												
											</article>
                
                           
                
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
                          
      </div><!-- #row -->
   </div><!-- #main -->
 </section>

<?php get_footer(); ?>