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
		<div class="hero-banner-container">
			<h1>hero banner</h1>
		</div>
		<div class="category-container">
			<span>Category 1</span>
			<span>Category 2</span>
			<span>Category 3</span>
			<span>Category 4</span>
		</div>

		<div class="aboutus-container">
			<h1>
				test
			</h1>
			<h2>
				what we do and who we are
			</h2>
		</div>
		<div class="main-product-with-text-container">

		</div>
		<div class="some-products-container">

		</div>
		<div class="where-to-find-us-container">

		</div>


	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
