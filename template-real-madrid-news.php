<?php
/*
Template Name: Real Madrid News
*/
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="rm-news-section">
            <div class="container">
                <h1>Real Madrid Latest News</h1>

                <h1 class="rm-news-title">
    <span id="rm-title-text">Real Madrid News 2025</span>
</h1>
                <p class="rm-news-subtitle">Stay updated with the latest Real Madrid news, transfers, and match updates.</p>
                <div class="rm-news-filter">
                    <label for="news-category">Filter by:</label>
                    <select id="news-category">
                        <option value="all">All News</option>
                        <option value="transfers">Transfers</option>
                        <option value="matches">Matches</option>
                        <option value="press">Press Conference</option>
                    </select>
                </div>
                <div class="rm-news-content">
                    <!-- Slider for news -->
                    <div class="rm-news-slider-container">

                    <?php 
                        // Query për postimet e fundit të Real Madrid
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'category_name' => 'real-madrid', // krijo kategori për lajmet e RM
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $rm_news = new WP_Query($args);

                        if($rm_news->have_posts()):
                            while($rm_news->have_posts()): $rm_news->the_post(); ?>
                                <div class="rm-news-item">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="rm-news-img"><?php the_post_thumbnail('medium'); ?></div>
                                    <?php endif; ?>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                </div>
                            <?php endwhile; 
                            wp_reset_postdata();
                        else: ?>
                            <p>No Real Madrid news yet!</p>

                <div class="rm-news-slider">
                    <button class="rm-prev">‹</button>
                    <div class="rm-news-container">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'category_name' => 'real-madrid', // krijo kategori për lajmet e RM
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $rm_news = new WP_Query($args);

                        if($rm_news->have_posts()):
                            while($rm_news->have_posts()): $rm_news->the_post(); ?>
                                <div class="rm-news-item">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        else: ?>
                            <p>No Real Madrid news yet!</p>
                        <?php endif; ?>
                    </div>
                    <button class="rm-next">›</button>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>


<?php
/*
Template Name: Real Madrid News
*/
get_header(); 
?>

<div class="rm-news-page">
    <h1>Real Madrid News 2025</h1>

    <div class="rm-news-slider-container">
        <?php 
        // Query për postimet e fundit të Real Madrid
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'category_name' => 'real-madrid', // sigurohu që ekziston kjo kategori
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $rm_news = new WP_Query($args);

        if($rm_news->have_posts()):
            while($rm_news->have_posts()): $rm_news->the_post(); ?>
                <div class="rm-news-item">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="rm-news-img"><?php the_post_thumbnail('medium'); ?></div>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                </div>
            <?php endwhile; 
            wp_reset_postdata();
        else: ?>
            <p>No news yet!</p>
        <?php endif; ?>
    </div>

    <div class="rm-news-slider-buttons">
        <span id="rm-prev">&#10094;</span>
        <span id="rm-next">&#10095;</span>
    </div>
</div>

<?php get_footer(); ?>
