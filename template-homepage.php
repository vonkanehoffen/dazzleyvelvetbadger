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
				<h1 class="swirly-colours"><?= get_bloginfo('name') ?></h1>
				<h4 class="swirly-colours"><?= get_bloginfo('description') ?></h4>
			</div>
		</div>

		<div id="content" class="site-content" tabindex="-1">
			<div class="col-full">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php storefront_homepage_content(); ?>
						<?php dvb_artist_loop(); ?>
						<?php storefront_recent_products( null ); ?>

						<section class="storefront-product-section">
							<h2 class="section-title">It's here</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5344662262933!2d-0.1297809840512813!3d51.50340991881562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c56a6cc61d%3A0x2eca1ef309dd9534!2s10+Downing+St%2C+Westminster%2C+London+SW1A+2AB!5e0!3m2!1sen!2suk!4v1504819354796" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</section>
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
//						do_action( 'homepage' ); ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div><!-- #page -->

	<?php get_footer(); ?>

</body>
</html>