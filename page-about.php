<?php
/*
Template Name: Real Madrid About Page
*/
get_header();
?>

<div id="content" class="site-content realmadrid-about">
    <main id="main" class="site-main">

        <!-- Hero Section Real Madrid -->
        <section class="about-hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/bernabeu-about.jpg');">
            <div class="overlay">
                <div class="container">
                    <h1>⚪️ About Real Madrid</h1>
                    <p>¡Hala Madrid y nada más! – Historia dhe madhështia e klubit më të suksesshëm në botë.</p>
                </div>
            </div>
        </section>

        <!-- Who We Are -->
        <section class="about-intro">
            <div class="container">
                <h2>Kush Jemi</h2>
                <p>Real Madrid Club de Fútbol është themeluar në vitin 1902 dhe është bërë simbol i suksesit sportiv. 
                Klubi ka përfaqësuar gjithmonë pasionin, elegancën dhe guximin — duke fituar zemrat e miliona tifozëve në mbarë botën.</p>
            </div>
        </section>

        <!-- Mission -->
        <section class="about-mission">
            <div class="container">
                <h2>Misioni Ynë</h2>
                <p>Misioni i Real Madrid është i qartë: të vazhdojë të jetë lider i futbollit botëror duke fituar trofe, 
                duke frymëzuar gjeneratat e reja dhe duke promovuar vlera si përkushtimi, uniteti dhe respekti.</p>
            </div>
        </section>

        <!-- What We Cover -->
        <section class="about-what-we-cover">
            <div class="container">
                <h2>Çfarë Përfaqëson Real Madrid</h2>
                <ul>
                    <li>🏆 14x UEFA Champions League</li>
                    <li>🇪🇸 35x La Liga Champions</li>
                    <li>⚽️ Akademia “La Fábrica” për gjeneratat e reja</li>
                    <li>🌍 Miliona tifozë në të gjithë botën</li>
                    <li>⭐ Ikona dhe legjenda të futbollit si Di Stéfano, Zidane, Cristiano Ronaldo</li>
                </ul>
            </div>
        </section>

        <!-- Contact Fans -->
        <section class="about-contact">
            <div class="container">
                <h2>Do të Lidhesh me Ne?</h2>
                <p>Bashkohu me komunitetin madrilen!  
                Vizito <a href="/contact">Faqen e Kontaktit</a> ose na ndiq në rrjetet sociale për të ndarë pasionin për Real Madrid.</p>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
