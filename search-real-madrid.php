<?php get_header('real-madrid'); ?>

<div id="primary" class="site-content">
    <main id="main" class="site-main">
        <div class="container">

            <h1 class="search-title">Search results for: <?php echo get_search_query(); ?></h1>

            <div class="search-form-wrapper">
                <?php get_search_form(); ?>
            </div>

            <div class="search-results">
                <?php 
                if( have_posts() ):
                    while( have_posts() ): the_post();
                        get_template_part( 'parts/content', 'search' );
                    endwhile;

                    echo '<div class="pagination">';
                    the_posts_pagination( array(
                        'prev_text' => '<< Newer',
                        'next_text' => 'Older >>',
                        'mid_size'  => 1,
                    ) );
                    echo '</div>';

                else: ?>
                    <p class="no-results">Sorry, no results found.</p>
                <?php endif; ?>
            </div>

        </div>
    </main>
</div>

<?php get_footer('real-madrid'); ?>

<style>
/* --- Real Madrid Search Page Styling --- */
.search-title {
    color: #003399;
    text-align: center;
    font-size: 2em;
    margin: 30px 0;
    text-transform: uppercase;
}
.search-form-wrapper {
    text-align: center;
    margin-bottom: 30px;
}
.search-results .no-results {
    text-align: center;
    font-style: italic;
    color: #ffcc00;
}
.pagination {
    text-align: center;
    margin-top: 25px;
}
.pagination .page-numbers {
    display: inline-block;
    padding: 8px 15px;
    margin: 2px;
    background: #003399;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}
.pagination .page-numbers:hover {
    background: #ffcc00;
    color: #003399;
}
</style>

