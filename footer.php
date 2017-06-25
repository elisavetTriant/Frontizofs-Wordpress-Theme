<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package frontizofs
 */
?>
 						</div>
                    </div>
                 </div>
                 
            </div><!-- main wrapper-->
	</div><!-- #content -->
	<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
                        <div class="row">
                                <footer id="colophon" class="site-footer" role="contentinfo">
                                    <div class="site-info">
                                        <?php do_action( 'frontizofs_credits' ); ?>
                                        <a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'frontizofs' ), 'WordPress' ); ?></a>
                                        <span class="sep"> | </span>
                                        <?php printf( __( 'Theme: %1$s by %2$s.', 'frontizofs' ), 'frontizofs', '<a href="http://thewebkit.com" rel="designer">Elisavet Triantafyllopoulou</a>' ); ?>
                                    </div><!-- .site-info -->
                                </footer><!-- #colophon -->
                  		 </div>
                        
                 	 </section>
   </div>
                   
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>