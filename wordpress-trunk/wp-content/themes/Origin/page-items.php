<?php
/*
Template Name: Gallery Page
*/
?>
<?php
$et_ptemplate_settings = array();
$et_ptemplate_settings = maybe_unserialize( get_post_meta(get_the_ID(),'et_ptemplate_settings',true) );

$fullwidth = isset( $et_ptemplate_settings['et_fullwidthpage'] ) ? (bool) $et_ptemplate_settings['et_fullwidthpage'] : (bool) $et_ptemplate_settings['et_fullwidthpage'];

$gallery_cats = isset( $et_ptemplate_settings['et_ptemplate_gallerycats'] ) ? $et_ptemplate_settings['et_ptemplate_gallerycats'] : array();
$et_ptemplate_gallery_perpage = isset( $et_ptemplate_settings['et_ptemplate_gallery_perpage'] ) ? (int) $et_ptemplate_settings['et_ptemplate_gallery_perpage'] : 12;
?>
<?php get_header(); ?>

<?php
	$et_settings = array();
	$et_settings = maybe_unserialize( get_post_meta( get_the_ID(), '_et_origin_settings', true ) );

	$big_thumbnail = isset( $et_settings['thumbnail'] ) ? $et_settings['thumbnail'] : '';

	if ( '' != $big_thumbnail ) echo '<div style="background-image: url(' . esc_url( $big_thumbnail ) . ');" id="big_thumbnail"></div>';
?>

<div id="main-content">

	<div id='spacer'><br><br><br><br></div>

	<div class='item-card' id='strawberries'>

		<span class='item-name'	>Strawberries</span>
		
		<div class='item-pic'></div>

		<div class='card-sidebar'>

			<button class='card-sidebar-button-cart'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-cart-inactive-empty.png'></button>

			<button class='card-sidebar-button-info'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/more-info.png'></button>

		</div>

	</div>


	<div class='item-card' id='leeks'>

		<span class='item-name'>Leeks</span>
		
		<div class='item-pic'></div>

		<div class='card-sidebar'>

			<button class='card-sidebar-button-cart'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-cart-inactive-empty.png'></button>

			<button class='card-sidebar-button-info'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/more-info.png'></button>

		</div>

	</div>


	<div class='item-card' id='radishes'>

		<span class='item-name'>Radishes</span>
		
		<div class='item-pic'></div>

		<div class='card-sidebar'>

			<button class='card-sidebar-button-cart'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-cart-inactive-empty.png'></button>

			<button class='card-sidebar-button-info'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/more-info.png'></button>

		</div>

	</div>


</div> <!-- #main-content -->

<?php get_template_part('includes/copyright', 'page'); ?>

<?php get_footer(); ?>