<?php
/**
 * The template for displaying Archive pages.
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
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'frontizofs' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'frontizofs' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'frontizofs' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'frontizofs' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'frontizofs' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'frontizofs' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'frontizofs');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'frontizofs');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'frontizofs' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'frontizofs' );

						else :
							_e( 'Archives', 'frontizofs' );

						endif;
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
				 
                <?php if ($count%2 != 1): ?><div class="row"><?php endif; ?>
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					 
					get_template_part( 'content-excerpt');
				?>
                <?php if ($count%2 == 1): ?></div><?php endif; ?>
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
