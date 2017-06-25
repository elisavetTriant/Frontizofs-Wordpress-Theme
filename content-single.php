<?php
/**
 * @package frontizofs
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('box', 'is-post')); ?>>
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  echo '<div class="image_container">';
			 	 the_post_thumbnail();
			  echo '</div>';
			} 
    ?>

	<div class="entry-content">
    	<header class="entry-header">
            <div class="entry-meta" >
                <time datetime="<?php echo the_time("Y-m-d\TH:i:s");?>" class="icon">
                      <em><?php the_time('l'); ?></em>
                      <strong><?php the_time('M'); echo ' , '; the_time('Y'); ?></strong>
                      <span><?php the_time('d'); ?></span>
               </time>
                <?php //frontizofs_posted_on(); ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
    	<div class="entry_main_content">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            
             <?php
                 wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'frontizofs' ),
                     'after'  => '</div>',
                 ) );
             ?>
         </div>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'frontizofs' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'frontizofs' ) );

			$posted_on = frontizofs_posted_on();
			
			if ( ! frontizofs_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '%1$s. Posted by This entry was tagged %3$s. Bookmark the <a href="%4$s" rel="bookmark">permalink</a>.', 'frontizofs' );
				} else {
					$meta_text = __( '%1$s. Bookmark the <a href="%4$s" rel="bookmark">permalink</a>.', 'frontizofs' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '%1$s. This entry was posted in %2$s and tagged %3$s. Bookmark the <a href="%4$s" rel="bookmark">permalink</a>.', 'frontizofs' );
				} else {
					$meta_text = __( '%1$s. This entry was posted in %2$s. Bookmark the <a href="%4$s" rel="bookmark">permalink</a>.', 'frontizofs' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$posted_on,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'frontizofs' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
