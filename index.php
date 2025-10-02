<?php get_header(); ?>

<div id="content" class="site-content realmadrid-blog">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            
            <!-- Blog title -->
            <section class="hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/bernabeu-hero.jpg');">
                <div class="overlay">
                    <div class="hero-items container">
                        <h1>Real Madrid News</h1>
                        <p class="lead">Lajmet më të fundit nga Santiago Bernabéu, lojtarët dhe ndeshjet.</p>
                    </div>
                </div>
            </section>

            <div class="container blog-container">
                <div class="blog-items">
                    <?php 
                        if( have_posts() ):
                            while( have_posts() ) : the_post();
                                get_template_part( 'parts/content' );
                            endwhile;
                            ?>
                                <!-- Pagination styled for Real Madrid -->
                                <div class="realmadrid-pagination">
                                    <div class="pages newer">
                                        <?php previous_posts_link( "⬅ Postimet më të reja" ); ?>
                                    </div>
                                    <div class="pages older">
                                        <?php next_posts_link( "Postimet më të vjetra ➡" ); ?>
                                    </div>
                                </div>
                            <?php
                        else: ?>
                            <p>⚪️ Asgjë nuk është publikuar ende – ¡Hala Madrid!</p>
                    <?php endif; ?>                                
                </div>

                <!-- Sidebar (widgets: fixtures, players, trophies) -->
                <?php get_sidebar(); ?>
            </div>

            <!-- Slider for featured matches / players -->
            <div class="wpdevs-slider realmadrid-slider">
                <div class="slides">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.jpg" alt="Real Madrid Squad" class="active">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide2.jpg" alt="Champions League Glory">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide3.jpg" alt="Santiago Bernabéu Stadium">
                </div>
                <div class="slider-controls">
                    <span class="prev">❮</span>
                    <span class="next">❯</span>
                </div>
            </div>

        </main>
    </div>
</div>

<?php get_footer(); ?>
