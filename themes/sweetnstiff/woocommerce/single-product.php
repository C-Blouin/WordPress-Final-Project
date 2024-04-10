<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header('shop'); ?>

<div id="primary" class="content-area">
    <?php
    /**
     * woocommerce_before_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
     * @hooked woocommerce_breadcrumb - 20
     */
    do_action('woocommerce_before_main_content');
    ?>

    <div class="container p-0 m-0">
        <div class="row">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="col-md-12">
                    <article class="product-container">
                        <?php wc_get_template_part('content', 'single-product'); ?>
                    </article>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>

    <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action('woocommerce_after_main_content');
    ?>


    <!-- Start of Bestsellers Wrapper -->
    <div class="bestsellers-wrapper">
        <!-- Start of Bestsellers Section -->
		<section id="bestsellers">
			<h2>Bestsellers</h2>
            <!-- Bestseller shortcode, this adds some additional enticement for customers viewing the single-products page. -->
			<div id="bestsellers-container" class="row">
				<?php echo do_shortcode('[bestsellers]'); ?>
			</div>
		</section>
        <!-- End of Bestsellers Section -->
	</div>
    <!-- End of Bestsellers Wrapper -->

</div>

<?php
get_footer('shop');
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>