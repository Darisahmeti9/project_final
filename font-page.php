<?php get_header(); ?>

<div class="real-madrid-slider">
    <div class="slider-container">
        <?php 
        // Merr 5 lajmet e fundit të Real Madrid (nga kategoria “Real Madrid”)
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'category_name' => 'real-madrid'
        );
        $slider_query = new WP_Query($args);

        if ($slider_query->have_posts()) :
            while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                <div class="slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                    <?php endif; ?>

                    <div class="slide-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="slide-date">🗓️ <?php echo get_the_date(); ?></p>
                        <p class="slide-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Lexo më shumë ➜</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>Nuk ka ende lajme për Real Madrid.</p>
        <?php endif; ?>
    </div>

    <!-- Shigjetat -->
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</div>

<!-- =======================
     SLIDER START
======================= -->
<div class="slider-container">
    <div class="slider">
        <div class="slide active">
            <img src="<?php echo get_template_directory_uri(); ?>/Real_Madrid_CF.jpg" alt="Real Madrid celebration">
        </div>

    <!-- Shigjetat për ndërrim -->
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
</div>

<style>
.slider-container {
  position: relative;
  max-width: 900px;
  margin: 30px auto;
  overflow: hidden;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(0,0,0,0.2);
}
.slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
}
.slide {
  min-width: 100%;
  transition: opacity 1s ease;
}
.slide img {
  width: 100%;
  display: block;
}
button.prev, button.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.5);
  color: white;
  border: none;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
  border-radius: 50%;
}
button.prev:hover, button.next:hover {
  background-color: rgba(0,0,0,0.8);
}
button.prev { left: 10px; }
button.next { right: 10px; }
</style>

<script>
let slides = document.querySelectorAll('.slide');
let
currentIndex = 0;

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
