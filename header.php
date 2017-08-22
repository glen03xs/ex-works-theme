<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ex-works
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Website for Ex-works">
    <meta name="author" content="Glen Nepomuceno">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--HEADER-->
        <header>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-10 pull-right-md pull-left-sm col-xs-8">
                            <div class="top-bar">
                                <ul class="inline">
                                    <li class="hidden-xs"><a href="call:+6323107099"><i class="fa fa-phone"></i> (632) 310 7099</a></li>
                                    <li class="hidden-xs"><a href="mailto:info@ex-worksph.com"><i class="fa fa-envelope"></i> info@ex-worksph.com</a></li>
                                    <li class="hidden-xs"><a href="#"><i class="fa fa-comments"></i> Chat with Us</a></li>
                                    <li class="quote-top"><a href="#" class="btn-top-quote">Get your quote</a></li>
                                </ul>
                                
                            </div> <!--end top-bar-->
                        </div> <!--end col-md-8-->
                        <div class="hidden-md hidden-lg col-sm-2 col-xs-4">
                            <div class="mob-menu">
                                <div class="mobile-menu-icon">
                                    <a class="nav-menu"><i class="fa fa-bars"></i></a>
                                </div> <!--end mobile-menu-icon-->
                                <nav>
                                    <?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										) );
									?>
                                </nav>
                            </div> <!--end mobile-menu-->
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 pull-left-md">
                            <div class="logo-area">
                                <?php
									the_custom_logo();
									if ( is_front_page() && is_home() ) : ?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php
									endif;

									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
										<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
									endif; ?> 
                            </div> <!--end logo-area-->
                        </div> <!--end col-lg-4-->
                        <div class="col-lg-8 hidden-sm hidden-xs">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ex-works' ); ?></button>
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'	 => 'main-nav',
									));
								?>
<!-- 								<div id="search-btn" class="search-btn">
									<a href="#"><i class="fa fa-search"></i></a>
								</div> <!-- end head-search   -->
							</nav><!-- #site-navigation -->
							
						</div> <!--end col-md-8-->
<!-- 							<div id="sb-search" class="sb-search">
									<input placeholder="Search..." type="text" value="" name="search" class="sb-search-input">
									<button type="submit" class="search-submit"><span class="sb-icon-search fa fa-search"></span></button>
								</form>
							</div> <!-- end head-search   -->
                    </div> <!--end row-->
                </div> <!--end container-->
            </div>  <!--end main-header-->
        </header>

