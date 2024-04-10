<?php get_header(); ?>

<!-- 

This is the default page when content is or a page is not specified.

Start of Index Wrapper
 -->
<div class="index-wrapper">
    <section id="index">
        <!-- Display the content of the pages here. -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </section>
</div>
<!-- End of Index Wrapper -->

<?php get_footer(); ?>