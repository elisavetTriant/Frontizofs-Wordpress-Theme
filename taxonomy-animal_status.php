<?php
/**
 * The template for displaying Stays Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package frontizofs
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="major">
				<h2>
					<?php
						$term = $wp_query->get_queried_object();
    					echo $term->name; 
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->
			<?php  $count = 0;
			 global $query_string;
			query_posts( $query_string . '&order=ASC' );
			?>
          
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				 
                <?php if ($count%3 != 1): ?><div class="row"><?php endif; ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					 
					get_template_part( 'content-excerpt-strays');
				?>
                <?php if ($count%3 == 1): ?></div><?php endif; ?>
			<?php  $count++; ?> 
			<?php endwhile; ?>

			<?php frontizofs_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
        	
           </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
