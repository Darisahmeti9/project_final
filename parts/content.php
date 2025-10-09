<article id="post-<?php the_ID(); ?>" <?php post_class('news-card'); ?>>
    <div class="news-thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large'); ?>
            </a>
        <?php endif; ?>
    </div>

    <div class="news-content">
        <header class="news-header">
            <h2 class="news-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="meta-info">
                <span class="news-date"><?php echo get_the_date(); ?></span>
                <span class="news-author"> | By <?php the_author_posts_link(); ?></span>
            </div>
        </header>

        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>

        <footer class="news-footer">
            <?php if (has_category()) : ?>
                <p class="news-categories"><strong>Categories:</strong> <?php the_category(', '); ?></p>
            <?php endif; ?>
            <?php if (has_tag()) : ?>
                <p class="news-tags"><strong>Tags:</strong> <?php the_tags('', ', '); ?></p>
            <?php endif; ?>
        </footer>
    </div>
</article>
<a href="<?php the_permalink(); ?>" class="read-more">Read More ➜</a>
</article>
