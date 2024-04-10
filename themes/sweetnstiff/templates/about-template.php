<?php 
/**
 * Template Name: About Page Template
 * Template Post Type: page
 */
get_header();
?>
<!-- Start of Main -->
<main>
    <div class="our-story-wrapper">

        <section id="our-story">    
            <h1><?php echo wp_kses_post(get_field('about_us_heading')); ?></h1>
            <div class="story-content-container">

                <p><?php echo wp_kses_post(get_field('about_paragraph_1')); ?></p>
                <p><?php echo wp_kses_post(get_field('about_paragraph_2')); ?></p>
                <p><?php echo wp_kses_post(get_field('about_paragraph_3')); ?></p>
                
                <div class="stories-container">
                    <img src="<?php echo esc_url( home_url( 'wp-content/themes/sweetnstiff/assets/images/snowflake.svg' ) ); ?>" alt="Snowflake Vector Graphic" width="100">

                    <h3><?php echo wp_kses_post(get_field('about_subheading')); ?></h3>
                    <p><?php echo wp_kses_post(get_field('sub_paragraph')); ?></p>
                    <a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="stories-cta"><?php echo wp_kses_post(get_field('about_cta')); ?></a>
                </div>
            </div>

        </section>
    </div>
</main>
<!-- End of Main -->
<?php
get_footer();
?>