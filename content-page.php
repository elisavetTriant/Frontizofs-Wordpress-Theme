<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package frontizofs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('box', 'is-post')); ?>>
	<header>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'frontizofs' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'frontizofs' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
