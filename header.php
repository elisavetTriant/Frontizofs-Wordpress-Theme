<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package frontizofs
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<noscript>
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory').'/skel-noscript.css'; ?>" >
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory').'/style.css'; ?>" >
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory').'/style-desktop.css'; ?>" >
    </noscript>
    <!--[if lte IE 8]><script src="<?php echo bloginfo('template_directory').'/js/html5shiv.js'?>"></script><link rel="stylesheet" href="<?php echo bloginfo('template_directory').'css/ie8.css'?>"  ><![endif]-->
<script>
window._skel_config = {
	preset: 'standard',
	<?php 
      echo "prefix: '".get_home_url()."/wp-content/themes/".wp_get_theme()."/style',";
	?>
	resetCSS: true,
	breakpoints: {
		'desktop': {
			grid: {
				gutters: 50
			}
		}
	}
};
</script>
<?php wp_head(); ?>
</head>



<body <?php body_class('body'); ?>>
<!-- Header Wrapper -->
<div id="page" class="hfeed site">
    <div id="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="12u">
                    <?php do_action( 'before' ); ?>        
                    <!-- Header -->
                    <section id="header" class="site-header" role="banner">
                    	<div style="text-align:right"><a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'frontizofs' ); ?></a></div>
                        <div class="site-branding">
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                        </div>
                        
                         <nav id="nav" class="main-navigation" role="navigation">          
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'depth' => 3) ); ?>
                        </nav><!-- #site-navigation -->
                    </section>
                 </div>
            </div>
        </div>
    </div>
    <div id="content" class="site-content">
    	<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
                <?php if(!is_front_page() && !is_home() && function_exists('bcn_display') ) : ?>

                 <div class="row">
                          <div class="12u">  
                                <div class="breadcrumb-list">
                                       <?php bcn_display(); ?>
                                 </div> 
                           </div>   
                 </div>
				<?php endif; ?>
               
					<div class="row">
						<div class="12u">