<?php
/**
 * Storechild template functions.
 *
 * @package storechild
 */

/**
 * Artists CPT
 */
function dvb_artist_loop() {
	$args = array( 'post_type' => 'artist', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	$count = 1
	?>

	<section class="storefront-product-section">
		<h2 class="section-title">Artists</h2>
		<div class="woocommerce columns-3">
			<ul class="products">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="product <?= $count % 3 ? '' : 'last' ?>">
						<a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link">
							<?php the_post_thumbnail('medium'); ?>
							<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
						</a>
					</li>
				<?php $count++; endwhile; ?>
			</ul>
		</div>
		<a href="/artists/" class="more-link">See all</a>
	</section>

<?php
}