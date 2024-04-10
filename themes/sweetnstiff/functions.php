<?php
// Here I am registring my header and footer navigation menus.
function navigation_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
// Using the add_action function to invoke the navigation_setup function after the theme is set up.
add_action( 'after_setup_theme', 'navigation_setup' );

// Adding featured image support for posts
add_theme_support( 'post-thumbnails' );

// Custom Post Type for Testimonials
function testimonial_init(){
    $args = array(
        'label' => 'Testimonials',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies'  => array( 'category', 'post_tag'),
        'hierarchical' => 'false',
        'query_var' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'page-attributes',
            'custom-fields',
        )
    );
    register_post_type('testimonials', $args);
}

add_action('init', 'testimonial_init');

// Shortcode to display my custom testimonial post type
function testimonial_shortcode() {
    $query = new WP_Query(array('post_type' => 'testimonials', 'posts_per_page' => 6, 'order' => 'asc'));
    // Retrieve the categories associated with my testimonials.
    $categories = get_the_category();

    while ($query -> have_posts()) : $query-> the_post(); ?>
    
        <!-- This Loop will generate an article for each of the testimonials present in my WordPress database. -->
        <article>
            <div class="testimonial-header gallery-hidden">
                <?php $testimonial_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail'); ?>
                <?php if ($testimonial_image): ?>
                    <img src="<?php echo $testimonial_image[0]; ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h3><?php the_title(); ?></h3>
            </div>
            <blockquote>
                <?php the_content(); ?>
                <cite>
                    — <?php echo wp_kses_post(get_field('testimonial_author_name')); ?>             
                </cite>                
            </blockquote>
            <!-- List to dynamically loop through all the categories and tags associated with each specific testimonial -->
            <ul class="testimonial-list">
                <?php
                // Retrieve categories and tags associated with the current testimonial post from my custom post type
                $categories = get_the_terms(get_the_ID(), 'category');
                $tags = get_the_terms(get_the_ID(), 'post_tag');                    
                // IF there are categories present, loop through categories and display them.
                if ($categories) {
                    // I Referenced the WordPress documentation about escape HTML, reference provided here: https://developer.wordpress.org/reference/functions/esc_html/
                    foreach ($categories as $category) {
                        echo '<li class="category">' . esc_html($category->name) . '</li>';
                    }
                }
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<li class="tag">' . esc_html($tag->name) . '</li>';
                    }
                }
                ?>
            </ul>
        </article>
    <?php endwhile;
    wp_reset_postdata();
}

// Registering the shortcode to be used in my landing page.
add_shortcode('testimonial', 'testimonial_shortcode');


// Enabling the custom gallery zoom functionality.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );

// Enabling WooCommerce support for my WordPress theme.
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Enabling the custom gallery zoom functionality.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );

// Adding the action to enable WooCommerce support.
add_action( 'after_setup_theme', 'woocommerce_support' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function enqueue_wc_cart_fragments() { wp_enqueue_script( 'wc-cart-fragments' ); }
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );


// Here is my custom shortcode to display featured products in the Candy category
function display_featured_candy_products() {
    // Custom query that will retrieve my 3 most recent products in the Candy category
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3,
        'tax_query'      => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'candy',
            ),
        ),
    );

    // Declaring my custom query, passing in my custom arguments to retrieve the 3 most recent products in the Candy category.
    $featured_products_query = new WP_Query($args);

    // IF there are products found in the Candy category, loop through the products and display them.
    if ($featured_products_query->have_posts()) {
        
        while ($featured_products_query->have_posts()) {
            $featured_products_query->the_post();

            // Declaring a product variable to store the product object
            $product = wc_get_product();
            // Storing the price HTML in a variable which will be displayed in my product cards.
            $price_html = $product->get_price_html();
            ?>

            <!-- Start of Product Card -->
            <article>
                <!-- Allow the product to be clickable and link to the corresponding product in the store. -->
                <a href="<?php the_permalink(); ?>" class="product-link">
                    <div class="featured-product-image">
                        <!-- Display the product image, or featured image attached to the product. -->
                        <?php the_post_thumbnail(); ?>
                        <div class="overlay"></div>
                    </div>
                    <!-- Displaying the product title and price. -->
                    <h3><?php the_title(); ?></h3>
                    <div class="product-price">
                        <?php echo $price_html; ?>
                    </div>
                </a>
            </article>
            <!-- End of Product Card -->
            <?php
        }

        // Reset post data
        wp_reset_postdata();
    } else {
        // No products found, set error message
        echo '<p>No products found in the Candy category.</p>';
    }
}

// Registering my featured candy products shortcode
add_shortcode('featured_candy_products', 'display_featured_candy_products');

function display_bestseller_products() {
    // Custom query to retrieve the 3 bestselling products, ordered by total sales.
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 3,
        'meta_key'       => 'total_sales',
        'orderby'        => 'meta_value_num',
        'order'          => 'DESC',
    );
    $bestsellers = new WP_Query($args);
    // Output the loop, IF there are products found, display them within the product template part.
    if ($bestsellers->have_posts()) :
        while ($bestsellers->have_posts()) : $bestsellers->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        wp_reset_postdata();
    // ELSE, display an error message that no products were found.
    else :
        echo '<p>No bestselling products found.</p>';
    endif;			
}

// Registering the bestselling products shortcode
add_shortcode('bestsellers', 'display_bestseller_products');