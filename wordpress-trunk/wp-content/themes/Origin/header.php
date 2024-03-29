<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">

	

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<script type="text/javascript" src="http://localhost/wordpress-trunk/wp-content/themes/Origin/js/bottom_nav.js">
	</script>

	<script type='text/javascript' src="http://localhost/wordpress-trunk/wp-content/themes/Origin/js/info_button.js">
	</script> 



	  <script>
	  $(function() {
	    $( ".accordion" ).accordion({collapsible: true, active: false, heightStyle: "content"});
	  });
	  </script>

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>

	<nav class="fixed-nav-bar">
 		 
		<button class='navbutton' id='navbutton1'><img id='back-button-img' src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-back.png'></button>

	    <button class='navbutton' id='navbutton2'><img id='home-button-img' src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-home-inactive.png'></button>

	    <button class='navbutton' id='navbutton3'><img id='cart-button-img' src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-cart-inactive-empty.png'><div class='cart-size'>2</div></button>

	    <!--<button class='navbutton' id='navbutton4'><a href="<?php echo get_page_link( get_page_by_title( Likes )->ID ); ?>"><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-likes-inactive.png'></a></button>-->

	</nav>

	<div id="main-wrap" class="clearfix">
		<?php do_action('et_header_top'); ?>

		<div id="info-bg"></div>

		<div id="info-area">
			<div id="logo-area">
				<?php $logo = ( ( $user_logo = et_get_option('origin_logo') ) && '' != $user_logo ) ? $user_logo : get_template_directory_uri() . "/images/logo.png"; ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo"/></a>
			</div> <!-- #logo-area -->

			<?php do_action('et_header_menu'); ?>

			<span id="mobile-nav"><?php esc_html_e( 'Navigation Menu', 'Origin' ); ?><span>+</span></span>

			<nav id="top-menu">
				<?php
					$menuClass = 'nav';
					$primaryNav = '';

					if ( 'on' == et_get_option( 'origin_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';

					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );

					if ( '' == $primaryNav ) { ?>
						<ul class="<?php echo esc_attr( $menuClass ); ?>">
							<?php if ( 'on' == et_get_option( 'origin_home_link' ) ) { ?>
								<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','Origin') ?></a></li>
							<?php } ?>

							<?php show_page_menu( $menuClass, false, false ); ?>
							<?php show_categories_menu( $menuClass, false ); ?>
						</ul>
				<?php }
					else echo($primaryNav);
				?>
			</nav>

			<?php get_sidebar(); ?>
		</div> <!-- #info-area -->

		<div class='date-banner'>

			<span id='date-banner-text'>May in California</span>			

		</div>

		<div id="main">
			<div id="wrapper">