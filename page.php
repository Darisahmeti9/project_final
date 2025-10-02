<?php get_header(); ?>

<div id="content" class="site-content realmadrid-page">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <!-- Hero section Real Madrid -->
            <section class="hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/bernabeu-page.jpg');">
                <div class="overlay">
                    <div class="hero-items container">
                        <h1 class="page-title">⚪️ Real Madrid</h1>
                        <p class="lead">Historia, trofetë dhe momentet e paharrueshme të klubit më të madh në botë.</p>
                    </div>
                </div>
            </section>

            <div class="container page-container">
                <div class="page-item realmadrid-content">
                    <?php 
                        while( have_posts() ) : the_post();
                            get_template_part( 'parts/content', 'page' );

                            // Komentet (mund t’i shfrytëzosh për fansat të lënë mendime)
                            if( comments_open() || get_comments_number() ){
                                comments_template();
                            }
                        endwhile;
                    ?>                                
                </div>
            </div>

            <!-- Extra Real Madrid section -->
            <section class="realmadrid-extra container">
                <div class="extra-box">
                    <h2>🏆 Trofetë Kryesorë</h2>
                    <ul>
                        <li>14x UEFA Champions League</li>
                        <li>35x La Liga</li>
                        <li>20x Copa del Rey</li>
                        <li>5x FIFA Club World Cup</li>
                    </ul>
                </div>
                <div class="extra-box">
                    <h2>⭐ Legjendat</h2>
                    <p>Raúl, Cristiano Ronaldo, Di Stéfano, Zidane, Casillas, Ramos...</p>
                </div>
            </section>

        </main>
    </div>
</div>

<?php get_footer(); ?>
