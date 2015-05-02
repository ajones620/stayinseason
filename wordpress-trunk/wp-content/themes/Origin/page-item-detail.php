<?php
/*
Template Name: Item Detail Page
*/
?>
<?php
$et_ptemplate_settings = array();
$et_ptemplate_settings = maybe_unserialize( get_post_meta(get_the_ID(),'et_ptemplate_settings',true) );

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

	<div class='item-detail-banner'>
		<span class='item-detail-banner-name'>Strawberries</span>
		
		<div class='item-pic'></div>
	</div>

	<div id='spacer'><br><br><br><br><br><br><br><br><br><br><br><br></div>


	<div class='item-detail-info-card' id='preparation'>

			<span class='item-detail-info-card-title'>Preparation</span>

	</div>



	<div class='accordion'>

		<h3 id='prep1'>Grill</h3>

		<div>

			<p>Peel, if desired, and cut into 1/2-inch slices. Brush slices on all sides generously with olive oil, melted butter, or cooking oil. Season as desired with herbs, salt, and ground black pepper. Place eggplant on a piece of heavy foil or directly on the grill rack.</p>

			<!-- <button class='like-button' id='prep1-like'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-likes-inactive.png'></button>

			<button class='dislike-button' id='prep1-dislike'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-dislike-inactive.png'></button> -->
		
		</div>

		<h3 id='prep2'>Sautee</h3>

		<div>

			<p>Brush slices of eggplant with olive oil on all sides and sprinkle with salt and ground black pepper. Place about 1/3 cup seasoned fine dry bread crumbs in a shallow dish. Dip each slice of eggplant into the crumbs, coating thoroughly. Add the coated eggplant slices to the hot skillet and cook about 5 minutes per side or until golden.</p>

			<!-- <button class='like-button' id='prep1-like'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-likes-inactive.png'></button>

			<button class='dislike-button' id='prep1-dislike'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-dislike-inactive.png'></button>
 -->
		</div>


		<h3 id='prep3'>Roast</h3>

		<div>

			<p>Preheat the oven to 450 degrees F. Line a 15x10x1-inch baking pan with foil or lightly grease it.Peel eggplant, if desired, and cut into 3/4-inch cubes. Place the cubes in a large bowl. For 6 cups eggplant (1 medium), in a small bowl combine three cloves garlic, minced; 1 tablespoon olive oil; 1/2 teaspoon salt; and 1/4 teaspoon ground black pepper. Toss eggplant with oil mixture and transfer to prepared pan. Roast eggplant about 20 minutes or until tender, stirring occasionally.</p>

			<!-- <button class='like-button' id='prep1-like'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-likes-inactive.png'></button>

			<button class='dislike-button' id='prep1-dislike'><img src='http://localhost/wordpress-trunk/wp-content/themes/Origin/images/bottom-nav-dislike-inactive.png'></button>
 -->
		</div>

	</div>


	<div class='item-detail-info-card' id='substitutes'>

		<span class='item-detail-info-card-title'>Substitutes</span>

		<p class='item-detail-info-text'>Okra, Zucchini, Portobello Mushrooms</p>

	</div>


	<div class='item-detail-info-card' id='complements'>

		<span class='item-detail-info-card-title'>Complements</span>

		<p class='item-detail-info-text'>Lemon-Dill Vinaigrette, Cinnamon</p>

	</div>


	<div class='item-detail-info-card' id='ripeness'>

		<span class='item-detail-info-card-title'>Ripeness</span>

		<p class='item-detail-info-text'>The green bean pods should be firm, crisp, and show no visible bulges. A bulge will indicate that the green bean is over-ripe.</p>

	</div>


	<div class='item-detail-info-card' id='shelf-life'>

		<span class='item-detail-info-card-title'>Shelf Life + Storage</span>

		<p class='item-detail-info-text'>In the pantry - 1 to 2 days, In the refrigerator - 7 to 10 days</p>

	</div>




</div> <!-- #main-content -->

<?php get_template_part('includes/copyright', 'page'); ?>

<?php get_footer(); ?>