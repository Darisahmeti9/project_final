<section class="real-madrid-news">
    <h2>Real Madrid Latest News</h2>

    <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
            
            <article class="latest-news">
                <?php if( has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                <?php endif; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="meta-info">
                    <p>
                        by <span><?php the_author_posts_link(); ?></span> 
                        <?php if( has_category()): ?>
                            Categories: <span><?php the_category( ' ' ); ?></span>
                        <?php endif; ?>
                        <?php if( has_tag()): ?>
                            Tags: <?php the_tags( '', ', ' ); ?>
                        <?php endif; ?>
                    </p>
                    <p><span><?php echo get_the_date(); ?></span></p>
                </div>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>
    <?php else: ?>
        <p>No news found for Real Madrid.</p>
    <?php endif; ?>
</section>
<section class="real-madrid-news">
    <h2>Real Madrid Latest News</h2>

    <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
            
            <article class="latest-news">
                <?php if( has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                <?php endif; ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="meta-info">
                    <p>
                        by <span><?php the_author_posts_link(); ?></span> 
                        <?php if( has_category()): ?>
                            Categories: <span><?php the_category( ' ' ); ?></span>
                        <?php endif; ?>
                        <?php if( has_tag()): ?>
                            Tags: <?php the_tags( '', ', ' ); ?>
                        <?php endif; ?>
                    </p>
                    <p><span><?php echo get_the_date(); ?></span></p>
                </div>
                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>
    <?php else: ?>
        <p>No news found for Real Madrid.</p>
    <?php endif; ?>
