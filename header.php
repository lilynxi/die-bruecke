<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>

		<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		?>

		<a class="skip-link button" href="#site-content"><?php esc_html_e( 'Skip to the content', 'wilson' ); ?></a>
	
		<div class="boy"></div>
		<div class="girl"></div>

		<div class="wrapper">
	
			<header class="sidebar" id="site-header">
							
				<div class="blog-header">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo@3x.png" alt="logo" /></a>
				</div><!-- .blog-header -->
				
				<div class="nav-toggle toggle">
				
					<p>
						<span class="show"><?php _e( 'Menu anzeigen', 'wilson' ); ?></span>
						<span class="hide"><?php _e( 'Menu schliessen', 'wilson' ); ?></span>
					</p>
				
					<div class="bars">
							
						<div class="bar"></div>
						<div class="bar"></div>
						<div class="bar"></div>
						
						<div class="clear"></div>
						
					</div><!-- .bars -->
				
				</div><!-- .nav-toggle -->
				

				
				<div class="mobile-menu">
						 
					<ul class="navigation">
					
						<?php
						if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( $menu_args ); 
                        } else {
                            wp_list_pages( $list_pages_args );
						}
						?>
						
					</ul>
					 
				</div><!-- .mobile-menu -->
				
				<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>


					
				<?php endif; ?>
									
			</header><!-- .sidebar -->

			<main class="content" id="site-content">

			
<!-- main menu -->

<div class="desktop-menu">
	<ul>
			<?php 
						
						if ( has_nav_menu( 'primary' ) ) {

							$menu_args = array( 
								'container'      => '',
								'items_wrap'     => '%3$s',
								'theme_location' => 'primary', 
							);

							wp_nav_menu( $menu_args ); 
														
												} else {

							$list_pages_args = array(
								'container' => '',
								'title_li'  => ''
							);

							wp_list_pages( $list_pages_args );
							
						}

						?>
	</ul>
</div>