<?php
/*
Template Name: Real Madrid Template
*/
?>

<?php get_header(); ?>

<style>
/* --- Real Madrid Custom Page Style --- */
.real-madrid-page {
    background: #ffffff;
    color: #0a0a0a;
    font-family: "Poppins", sans-serif;
    padding: 50px 0;
}
.real-madrid-header {
    text-align: center;
    margin-bottom: 40px;
}
.real-madrid-header img {
    width: 120px;
    height: auto;
    margin-bottom: 15px;
}
.real-madrid-header h1 {
    color: #003399; /* blu e errët e Real Madridit */
    text-transform: uppercase;
    font-weight: 700;
    font-size: 2.5em;
}
.real-madrid-content {
    max-width: 900px;
    margin: 0 auto;
    background: #f8f8f8;
    border: 2px solid #003399;
    border-radius: 15px;
    padding: 30px 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}
.real-madrid-content h2, .real-madrid-content h3 {
    color: #003399;
    border-left: 5px solid #ffcc00;
    padding-left: 10px;
}
.real-madrid-content p {
    line-height: 1.7;
    margin-bottom: 15px;
}
.real-madrid-footer {
    text-align: center;
    margin-top: 50px;
    font-weight: 600;
    color: #003399;
}
</style>

<div id="content" class="site-content real-madrid-page">
    <div class="container">
        <div class="real-madrid-header">
            <img src="<?php echo get_template_directory_uri(); ?>/images/realmadrid-logo.png" alt="Real Madrid Logo">
            <h1>Real Madrid Club de Fútbol</h1>
        </div>

        <div class="real-madrid-content">
            <?php 
                if( have_posts() ):
                    while( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else: ?>
                    <p>Asnjë informacion nuk është shtuar ende për Real Madridin.</p>
            <?php endif; ?>
        </div>

        <div class="real-madrid-footer">
            ¡Hala Madrid y nada más!
        </div>
    </div>
</div>

<?php get_footer(); ?>
