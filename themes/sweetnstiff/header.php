<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- Setting Character Encoding. -->
    <meta charset="<?php bloginfo('charset') ?>">
    <!-- Setting Responsive Meta Tag, Allowing Consistent Scaling on All Device Viewports. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Linking my Custom Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( home_url( 'wp-content/uploads/' ) ); ?>">
    <?php wp_head(); ?>
    <!-- Linking to Normalized CSS Before Applying Custom Styles. -->
    <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/sweetnstiff/normalize.css' ) ); ?>">
    <!-- Linking Custom Typekit for Futura Font from Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/esk7uhz.css">
    <!-- Importing Bootstrap CSS CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Applying Custom Styles. -->
    <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/sweetnstiff/style.css' ) ); ?>">
    <!-- Importing Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
 </script>
</script>
    <!-- Linking Custom JavaScript with the defer attribute to allow the DOM to load before executing any scripts. -->
    <script src="<?php echo esc_url( home_url( 'wp-content/themes/sweetnstiff/script.js' ) ); ?>" defer></script>
</head>
<!-- Rendering Body Contents -->
<body <?php body_class(); ?>>
  <!-- Start of Header  -->
    <header id="header-nav">
        <!-- Start of Primary Header Navigation -->
        <nav class="navbar navbar-expand-xl navbar-light justify-content-between align-items-center" role="navigation" data-bs-theme="light">
            <div class="container-fluid">
                <!-- Start of Hamburger Toggle Button Icon -->
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End of Hamburger Toggle Button Icon -->
                <div class="offcanvas offcanvas-end" id="navbarNav">                
                    <div class="offcanvas-body">                       
                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/03/sweet-n-stiff-logo.png' ) ); ?>" class="navbar-brand logo header-logo" alt="Sweet N' Stiff Logo" width="180"></a>
                        <!-- Start of Primary Navigation Menu -->
                        <?php                        
                          wp_nav_menu(array(
                              'menu'           => 'header-nav',
                              'theme_location' => '',
                              'depth'          => 1,
                              'fallback_cb'    => 'false',                             
                          ));
                        ?>
                    </div>
                    <!-- End of .offcanvas-body -->
                </div> 
                <!-- End of .offcanvas -->
            </div>
            <!-- End of .container-fluid -->
        </nav>
        <!-- End of Primary Header Navigation -->
    </header>
    <!-- End of Header -->