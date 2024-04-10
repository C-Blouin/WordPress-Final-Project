<?php 
get_header();
?>
<!-- Start of Main -->
<main>
    <!-- Start of Shop Warpper -->
    <div class="shop-wrapper">
        <!-- Start of Shop Section -->
        <section id="shop">
            <!-- Intro Sectional Content -->
            <div class="shop-intro">
                <h1>Products</h1>
                <p>Here is a collection of every delicious freeze-dried treat available at Sweet N' Stiff!</p>
            </div>
            <?php
            // Displaying the shop loop content, to display my products, limited to 20 per page, in a 4 column grid layout.
            do_action('woocommerce_before_shop_loop');
                echo do_shortcode('[products limit="20" columns="4"]');
            do_action('woocommerce_after_shop_loop');
            ?>       
        </section>      
        <!-- End of Shop Section -->  
    </div>
    <!-- End of Shop Wrapper -->
</main>
<!-- End of Main -->
<?php
get_footer();
?>