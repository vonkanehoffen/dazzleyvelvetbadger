<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

		<div id="bg-scene"></div>
		<div id="splash">
			<div class="inner">
				<h1>Dazzley meets Velvet Badger</h1>
			</div>
		</div>

		<div id="content" class="site-content" tabindex="-1">
			<div class="col-full">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php
						/**
						 * Functions hooked in to homepage action
						 *
						 * @hooked storefront_homepage_content      - 10
						 * @hooked storefront_product_categories    - 20
						 * @hooked storefront_recent_products       - 30
						 * @hooked storefront_featured_products     - 40
						 * @hooked storefront_popular_products      - 50
						 * @hooked storefront_on_sale_products      - 60
						 * @hooked storefront_best_selling_products - 70
						 */
						do_action( 'homepage' ); ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>