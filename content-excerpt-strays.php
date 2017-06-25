<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="4u">
    <section id="archive-item" class="box">
     <?php 
			$terms= get_the_terms( $post->ID, 'animal_status'); 
								
			if ( $terms && ! is_wp_error( $terms ) ) : 
			
				$terms_links = array();
			
				foreach ( $terms as $term ) {
					$terms_links[] = '<a href="'.get_term_link( $term->slug, 'animal_status').'">'.$term->name.'</a>';
				}
									
				$on_animal_status = join( ", ", $terms_links );
			?>
            
			<div class="corner">
               <?php  echo $on_animal_status;  ?>
			</div>
            <?php endif;?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(array('is-post')); ?>>
           
			<?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  echo '<div class="image_container">';
                     the_post_thumbnail();
                  echo '</div>';
                } 
        ?>
                <?php if ( is_single() ) : ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php else : ?>
                <h1 class="entry-title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h1>
                <?php endif; // is_single() ?>
        
    
            
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
    
            <footer class="entry-meta">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="button-icon button button-icon-3"><?php echo 'More'; ?></a>
            </footer><!-- .entry-meta -->
        </article><!-- #post -->
    </section>
</div>