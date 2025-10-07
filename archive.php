<?php get_header(); ?>

<div id="content" class="site-content realmadrid-archive">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            
            <!-- Archive Header -->
            <section class="realmadrid-archive-header">
                <?php 
                    the_archive_title( '<h1 class="archive-title">', '</h1>' ); 
                    the_archive_description( '<div class="archive-description">', '</div>' ); 
                ?>
            </section>

            <div class="container archive-container">
                <div class="archive-items">
                    
                    <?php 
                    if( have_posts() ):
                        while( have_posts() ) : the_post();
                            get_template_part( 'parts/content' );
                        endwhile;
                        ?>

                        <!-- Pagination -->
                        <div class="realmadrid-pagination">
                            <div class="pages newer">
                                <?php previous_posts_link( "⬅️ Postimet më të reja" ); ?>
                            </div>
                            <div class="pages older">
                                <?php next_posts_link( "Postimet më të vjetra ➡️" ); ?>
                            </div>
                        </div>

                    <?php else: ?>
                        <div class="no-posts">
                            <h2>😢 Nuk ka postime për momentin!</h2>
                            <p>Kthehu në <a href="<?php echo home_url(); ?>">faqen kryesore</a> për të parë ndeshjet më të fundit të Real Madrid.</p>
                        </div>
                    <?php endif; ?>
                </div>

                <?php get_sidebar(); ?>
            </div>

        </main>
    </div>
</div>

<?php get_footer(); ?>
