<article class="single-post">
    <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-meta">
            <span>By <?php the_author_posts_link(); ?></span> |
            <span><?php echo get_the_date(); ?></span> |
            <span>Category: <?php the_category(', '); ?></span>
        </div>
    </header>

    <div class="post-thumbnail">
        <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
    </div>

    <div class="post-content">
        <?php the_content(); ?>
    </div>

    <footer class="post-footer">
        <?php wp_link_pages(); ?>
        <div class="tags">
            <?php the_tags('<strong>Tags:</strong> ', ', ', ''); ?>
        </div>
    </footer>
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