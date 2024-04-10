        <!-- Start of Footer -->
        <footer>
            <nav>                                     
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/03/sweet-n-stiff-logo.png' ) ); ?>" class="navbar-brand header-logo" alt="Sweet N' Stiff Logo" width="180"></a>          
                <!-- Start of Footer Navigation Menu -->

                <?php
                    wp_nav_menu(array(
                        'menu'           => 'footer-nav',
                        'theme_location' => '',
                        'depth'          => 1,
                        'fallback_cb'    => 'false',
                    ));
                ?>                
            
                <!-- Social Container -->
                <div class="footer-socials">

                    <h5>Stay Connected</h5>
                    <div class="social-line-divider"></div>

                    <div class="social-icon-container">

                        <!-- Facebook Social Link SVG Container -->
                        <a href="#">
                            
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 48.4 48.1" style="enable-background:new 0 0 48.4 48.1;" xml:space="preserve" class="social-icons">
                                <style type="text/css">
                                    .social-fill{fill:#14E8F9;}
                                </style>
                                <g>
                                    <path class="social-fill" d="M48.4,24.2C48.4,10.8,37.6,0,24.2,0S0,10.8,0,24.2c0,12.1,8.8,22.1,20.4,23.9V31.2h-6.1v-7h6.1v-5.3
                                    c0-6.1,3.6-9.4,9.1-9.4c2.6,0,5.4,0.5,5.4,0.5v6h-3.1c-3,0-3.9,1.9-3.9,3.8v4.5h6.7l-1.1,7H28v16.9C39.5,46.3,48.4,36.3,48.4,24.2z
                                    "/>
                                </g>
                            </svg>
                        </a>

                        <!-- Instagram Social Link SVG Container -->
                        <a href="#">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 47.2 47" style="enable-background:new 0 0 47.2 47;" xml:space="preserve" class="social-icons">
                                <style type="text/css">
                                    .social-fill{fill-rule:evenodd;clip-rule:evenodd;fill:#14E8F9;}
                                </style>
                                <g>
                                    <path class="social-fill" d="M12.7,0h21.7c7,0,12.7,5.7,12.7,12.7v21.6c0,7-5.7,12.7-12.7,12.7H12.7C5.7,47,0,41.3,0,34.3V12.7
                                    C0,5.7,5.7,0,12.7,0z M36.2,8.2c1.5,0,2.7,1.2,2.7,2.7s-1.2,2.7-2.7,2.7c-1.6,0-2.7-1.2-2.7-2.7S34.7,8.2,36.2,8.2L36.2,8.2z
                                    M23.5,10.7h0.1c7,0,12.8,5.9,12.8,12.8c0,7.1-5.9,12.8-12.8,12.8h-0.1c-7,0-12.7-5.7-12.7-12.8C10.8,16.5,16.5,10.7,23.5,10.7z
                                    M23.5,15.1h0.1c4.6,0,8.4,3.8,8.4,8.4c0,4.7-3.8,8.6-8.4,8.6h-0.1c-4.6,0-8.4-3.8-8.4-8.6C15.1,18.9,18.9,15.1,23.5,15.1z
                                    M12.8,4.1h21.5c4.8,0,8.8,3.9,8.8,8.8v21.4c0,4.8-3.9,8.8-8.8,8.8H12.8C8,43,4.1,39,4.1,34.2V12.8C4.1,8,8,4.1,12.8,4.1L12.8,4.1z
                                    "/>
                                </g>
                            </svg>
                        </a>

                        <!-- Twitter Social Link SVG Container -->
                        <a href="#">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 53.9 43.8" style="enable-background:new 0 0 53.9 43.8;" xml:space="preserve" class="social-icons">
                                <style type="text/css">
                                    .social-fill{fill-rule:evenodd;clip-rule:evenodd;fill:#14E8F9;}
                                </style>
                                <g>
                                    <path class="social-fill" d="M26.6,13.5C24.4,2.2,38-4.6,46,3.6c0,0,3.6-1,6.7-3c0,0-1.1,3.9-5,6.3c0,0,4.3-0.6,6.1-1.7
                                    c0,0-1.9,3.9-5.3,5.3c1.9,25.9-26,41.6-48.6,28.7c0,0,11.2,0.6,15.9-4.9c0,0-6.9,0.6-10.3-7.7c0,0,2.6,1,5.1-0.3
                                    c0,0-8-1.3-8.7-10.9c0,0,2.6,2,5.4,1.3c0,0-8.9-5.3-3.9-14.9C3.6,1.9,13,13.9,26.6,13.5z"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </nav>
            <p class="copyright">&copy; 2024 Sweet N' Stiff. Website Developed By <span class="highlight">Christopher Blouin</span></p>
        </footer>
    <!-- End of Footer -->

    <!-- Start of WordPress Footer, this allows for variable product support. -->
    <?php wp_footer(); ?>
    </body>
</html>