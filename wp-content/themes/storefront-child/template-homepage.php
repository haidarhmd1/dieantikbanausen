<?php

/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="hero-banner-container mb-3">
			<div class="title-banner-container">
				<div class="main-container-title">
					<h1>
						<?php echo get_field('headline', get_the_ID()); ?>
					</h1>
					<span>
						<?php echo get_field('sub_title', get_the_ID()); ?>
					</span>
				</div>
				<!-- <div class="title-sub-banner-container">
					<span>100+ ananana</span> |
					<span>100+ ananana</span>
				</div> -->
			</div>
			<div class="image-slide-container">
				<div class="slick-slider">
					<?php if (get_field('banner_image', get_the_ID())) {
						echo '<div><img src="' . get_field('banner_image', get_the_ID()) . '" alt=""></div>';
					} ?>
					<?php if (get_field('banner_image_2', get_the_ID())) {
						echo '<div><img src="' . get_field('banner_image_2', get_the_ID()) . '" alt=""></div>';
					} ?>
					<?php if (get_field('banner_image_3', get_the_ID())) {
						echo '<div><img src="' . get_field('banner_image_3', get_the_ID()) . '" alt=""></div>';
					} ?>
				</div>
			</div>
		</div>

		<div class="aboutus-container col-full mb-3 text-center">
			<h1>
				<?php echo get_field('wer_wir_sind', get_the_ID()); ?>
			</h1>
			<p>
				<?php echo get_field('wer_wir_sind_text', get_the_ID()); ?>
			</p>
		</div>
		<?php if( get_field('soll_kategorien_zu_sehen_sein_', get_the_ID()) ):  ?>
		<div class="category-container col-full mb-3">
			<div class="header-title-cat" style="text-align: center;">
				<h2>
				<?php echo get_field('kategorie_title', get_the_ID()); ?></h2>
			</div>
			<div class="categories-container">
				<?php
				$args = array(
					'taxonomy' => 'product_cat',
					'hide_empty' => false,
				);
				$terms = get_terms($args);
				if ($terms) {
					echo '<div class="hp-woocommerce-categories">';
					foreach ($terms as $term) {
						echo '<div class="hp-woocommerce-product-category-page">';
						woocommerce_subcategory_thumbnail($term);
						echo '<p>';
						echo '<a href="' .  esc_url(get_term_link($term)) . '" class="' . $term->slug . '">';
						echo $term->name;
						echo '</a>';
						echo '</p>';
						echo '</div>';
					}
					echo '</div>';
				} ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="main-product-with-text-container col-full mb-3">
			<div class="some_our_product_title text-center">
				<h2><?php echo get_field('produkte_titel', get_the_ID()); ?>	</h2>
			</div>
			<div class="some_our_products_product_loop">
				<?php
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => get_field('produkte_nummer', get_the_ID())
				);
				$loop = new WP_Query($args);
				if ($loop->have_posts()) {
					while ($loop->have_posts()) : $loop->the_post(); ?>
						<a href="<?php echo get_permalink($loop->post->ID) ?>" class="text-center">
							<div class="product-a" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">

							</div>
							<p><?php echo get_the_title(); ?></p>
						</a>
				<?php
					endwhile;
				} else {
					echo __('No products found');
				}
				wp_reset_postdata();
				?>
			</div>
			<div class="view-all-products">
				<a href="">Alle Produkte</a>
			</div>
		</div>
		<div class="where-to-find-us-container col-full mb-3">
			<div class="info-text text-center">
				<h1>
				<?php echo get_field('wo_man_uns_findet_title', get_the_ID()); ?>
				</h1>
				<div class="info"><?php echo get_field('kontaktinformation', get_the_ID()); ?>
				</div>
			</div>
			<div class="map-google">
				<div class="mapouter">
					<div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br>
						<style>
							.mapouter {
								margin-top: 25px;
								position: relative;
								text-align: right;
								height: 500px;
								width: 100%;
							}
						</style><a href="https://www.embedgooglemap.net">how to add google map to website</a>
						<style>
							.gmap_canvas {
								overflow: hidden;
								background: none !important;
								height: 500px;
								width: 100%;
							}
						</style>
					</div>
				</div>
			</div>
		</div>


	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
