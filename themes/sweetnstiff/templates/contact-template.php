<?php 
/**
 * Template Name: Contact Template
 * Template Post Type: page
 */
get_header();
?>
<!-- Start of Main -->
<main>
    <div class="contact-wrapper">
        <!-- Start of Contact Section -->
        <section class="contact">
            <!-- Start of Form Wrapper -->
            <div class="form-wrapper">
                <div class="form-intro">
                    <h1><?php echo wp_kses_post(get_field('contact_heading')); ?></h1>
                    <p><?php echo wp_kses_post(get_field('contact_intro')); ?></p>
                    <img src="<?php echo esc_url( home_url( 'wp-content/themes/sweetnstiff/assets/images/snow-arrow-right.svg' ) ); ?>" alt="Snowflake Arrow Vector Graphic" width="50">
                </div>
                <!-- Start of Contact Form -->
                <form id="contact-form">
                    <div class="row">
                        <label for="fullname">Full Name *</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" maxlength="50" required>
                    </div>
                    <div class="row">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" maxlength="15" required>
                    </div>
                    <div class="row">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" maxlength="60" required>
                    </div>
                    <div class="row">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type your message here!"></textarea>
                    </div>                    
                    <button type="submit" title="Contact Sweet N' Stiff" id="contact-button" class="btn"><?php echo wp_kses_post(get_field('form_submit')); ?></button>                    
                </form>
                <!-- End of Contact Form -->
            </div>
            <!-- End of Form Wrapper -->
        </section>
        <!-- End of Contact Section -->
    </div>
</main>
<!-- End of Main -->
<?php
get_footer();
?>

