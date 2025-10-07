<?php get_header(); ?>
<div id="content" class="site-content realmadrid-404">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    
                    <!-- Real Madrid 404 Hero -->
                    <section class="realmadrid-404-hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/bernabeu-404.jpg');">
                        <div class="overlay">
                            <h1 class="error-title">⚪️ 404 – Page Not Found</h1>
                            <p class="error-subtitle">As në Bernabéu nuk e gjetëm këtë faqe 😅</p>
                            <p class="error-text">Por mos u shqetëso! Real Madrid gjithmonë gjen një mënyrë për t’u rikthyer te fitorja 💪</p>
                        </div>
                    </section>

                    <!-- Search + Suggestions -->
                    <div class="error-content">
                        <h2>Kërko diçka tjetër</h2>
                        <?php get_search_form(); ?>
                        
                        <h3>📢 Postimet më të fundit</h3>
                        <?php 
                        the_widget( 
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => 'Të Rejat nga Real Madrid',
                                'number'    => 3
                            ) 
                        ); 
                        ?>
                        
                        <a class="realmadrid-btn" href="<?php echo home_url( '/' ); ?>">⬅️ Kthehu në Faqen Kryesore</a>
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>
