<?php 
/**
 * Template Name: Landing Template
 * Template Post Type: page
 */
get_header();
?>
<!-- Start of Main -->
<main class="content-area">
    <div class="hero-wrapper">
        <section id="hero">
                <h1>Delightfully Sweet <span class="hero-heading-cursive"><br>&amp;</span> <span class="hero-accent">Adorably Crunchy</span></h1>
                <p><?php echo wp_kses_post(get_field('hero_intro_paragraph')); ?></p>
                <div class="cta-container">
                    <a href="#featured-products" class="hero-cta"><?php echo wp_kses_post(get_field('hero_cta')); ?></a>                    
                </div>                
        </section>
        <div class="hero-divider"></div>
    </div>
    <div class="testimonial-wrapper">
        <!-- Start of Testimonials Section -->
        <section id="testimonials">
            <h2><?php echo wp_kses_post(get_field('testimonial_section_heading')); ?></h2>
            <!-- Start of Testimonial Card Container -->
            <div class="testimonial-card-container">
				<?php echo do_shortcode('[testimonial]'); ?>              
            </div>
            <!-- End of Testimonial Card Container -->
        </section>
        <!-- End of Testimonials Section -->
    </div>

	<!-- Start of Featured Products Wrapper -->
    <div class="featured-products-wrapper">

		<!-- Start of Featured Products Section -->
        <section id="featured-products">
            <h2>Featured <span class="featured-heading">Products</span></h2>
            <p><?php echo wp_kses_post(get_field('featured_products_paragraph')); ?></p>
			
			<!-- Start of Product Container -->
			<div id="featured-products-container">
				<!-- Start of Featured Products Loop, using a shortcode to display my 3 most recent products from the candy category. -->
				<?php echo do_shortcode('[featured_candy_products]'); ?>
			</div>

			<!-- Linking to my shop page, and attaching the escape URL and passing in the shop link. -->
			<a href="<?php echo esc_url( home_url( 'shop' ) ); ?>"><?php echo wp_kses_post(get_field('featured_products_shop_cta')); ?></a>
			
        </section>
		<!-- End of Featured Products Section -->

    </div>
	<!-- End of Featured Products Wrapper -->
	
</main>
<!-- End of Main -->
<?php
get_footer();
?>