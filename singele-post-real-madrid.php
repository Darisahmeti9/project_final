<?php get_header(); ?>

<div id="primary" class="single-post-real-madrid">
    <div id="main">
        <div class="container">

            <?php 
            while( have_posts() ):
                the_post();
                get_template_part( 'parts/content', 'single' );
                ?>
                <div class="wpdevs-pagination">
                    <div class="pages next">
                        <?php next_post_link( '&laquo; %link' ); ?>
                    </div>
                    <div class="pages previous">
                        <?php previous_post_link( '%link &raquo;' ); ?>  
                    </div>
                </div>
                
                <?php
                if( comments_open() || get_comments_number() ){
                    comments_template();
                }
            endwhile;
            ?>

        </div>
    </div>
</div>

<style>
/* --- Real Madrid Single Post Styling --- */
.single-post-real-madrid .container {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    border: 2px solid #003399; /* Real Madrid Blue */
}

.single-post-real-madrid h1, 
.single-post-real-madrid h2, 
.single-post-real-madrid h3 {
    color: #003399;
}

.wpdevs-pagination .pages.next a,
.wpdevs-pagination .pages.previous a {
    color: #003399;
    font-weight: bold;
    text-decoration: none;
}

.wpdevs-pagination .pages.next a:hover,
.wpdevs-pagination .pages.previous a:hover {
    color: #ffcc00; /* Gold accent */
}
</style>

<?php get_footer(); ?>
