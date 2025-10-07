<?php get_header(); ?>

<!-- === Real Madrid Hero Slider === -->
<div id="realmadrid-slider">
    <div class="slider-inner">
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/rm1.jpg" alt="Real Madrid Stadium"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/rm2.jpg" alt="Real Madrid Players"></div>
        <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/rm3.jpg" alt="Real Madrid Fans"></div>

        <div class="slider-controls">
            <div class="prev" onclick="onLeftButton()">&#10094;</div>
            <div class="next" onclick="onRightButton()">&#10095;</div>
        </div>
    </div>
</div>

<!-- === Slider Dots === -->
<div class="realmadrid-dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<div id="content" class="site-content">
    <main id="main" class="site-main">

        <!-- === Squad Section === -->
        <section class="realmadrid-squad">
            <div class="container">
                <h2>⚽ Real Madrid Squad</h2>
                <p>Meet the stars who make history every season.</p>
                <div class="squad-gallery">
                    <div class="player"><img src="<?php echo get_template_directory_uri(); ?>/images/vini.jpg" alt="Vinicius Jr"><span>Vinícius Jr</span></div>
                    <div class="player"><img src="<?php echo get_template_directory_uri(); ?>/images/bellingham.jpg" alt="Bellingham"><span>Bellingham</span></div>
                    <div class="player"><img src="<?php echo get_template_directory_uri(); ?>/images/modric.jpg" alt="Luka Modric"><span>Modrić</span></div>
                </div>
            </div>
        </section>

        <!-- === Achievements Section === -->
        <section class="realmadrid-achievements">
            <div class="container">
                <h2>🏆 Our Glory</h2>
                <p>The most successful club in football history.</p>
                <ul class="trophies">
                    <li><strong>15</strong> × UEFA Champions League</li>
                    <li><strong>35</strong> × La Liga Titles</li>
                    <li><strong>20</strong> × Copa del Rey</li>
                    <li><strong>5</strong> × Club World Cup</li>
                </ul>
            </div>
        </section>

        <!-- === Latest News === -->
        <section class="realmadrid-news">
            <div class="container">
                <h2>📰 Latest News</h2>
                <div class="news-list">
                    <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category_name' => 'real-madrid'
                    );
                    $postlist = new WP_Query( $args );

                    if( $postlist->have_posts() ):
                        while( $postlist->have_posts() ) : $postlist->the_post();
                            get_template_part( 'parts/content', 'latest-news' );
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>No news available right now!</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
