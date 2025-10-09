<article id="post-<?php the_ID(); ?>" <?php post_class('single-news-article'); ?>>

    <header class="news-header">
        <h1 class="news-title"><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>
                🗓️ <?php echo get_the_date(); ?> |
                ✍️ <?php the_author_posts_link(); ?>
            </p>
            <?php if (has_category()) : ?>
                <p><strong>🏷️ Categories:</strong> <?php the_category(', '); ?></p>
            <?php endif; ?>
            <?php if (has_tag()) : ?>
                <p><strong>🔖 Tags:</strong> <?php the_tags('', ', '); ?></p>
            <?php endif; ?>
        </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="news-content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>
<section class="related-posts">
    <h2>Related Posts</h2>
    <?php
    $related = new WP_Query( array(
        'category__in' => wp_get_post_categories( get_the_ID() ),
        'posts_per_page' => 3,
        'post__not_in' => array( get_the_ID() )
    ) );

    if( $related->have_posts() ) :
        while( $related->have_posts() ) : $related->the_post(); ?>
            <article class="related-post">
                <?php if( has_post_thumbnail() ): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                <?php endif; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </article>
        <?php endwhile;
        wp_reset_postdata();
    else: ?>
        <p>No related posts found.</p>
    <?php endif; ?>
