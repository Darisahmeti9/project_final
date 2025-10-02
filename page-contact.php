<?php
/*
Template Name: Real Madrid Contact Page
*/
get_header();
?>

<div id="content" class="site-content realmadrid-contact">
    <main id="main" class="site-main">

        <!-- Hero Section Real Madrid -->
        <section class="contact-hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/images/bernabeu-contact.jpg');">
            <div class="overlay">
                <div class="container">
                    <h1>⚪ Contact Real Madrid Fans Hub</h1>
                    <p>¡Hala Madrid y nada más!  
                       Na shkruaj mesazhin tënd – pyetje, ide, ose thjesht për të treguar dashurinë për klubin më të madh në botë. </p>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form realmadrid-form">
                    <p>
                        <label for="name">Emri Yt</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Email-i Yt</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="subject">Subjekti</label><br>
                        <input type="text" id="subject" name="subject" placeholder="P.sh. Hala Madrid!">
                    </p>
                    <p>
                        <label for="message">Mesazhi</label><br>
                        <textarea id="message" name="message" rows="6" required placeholder="Shkruaj këtu dashurinë për Real Madrid-in..."></textarea>
                    </p>
                    <p>
                        <input type="submit" name="submit_contact" value="📨 Dërgo Mesazhin">
                    </p>
                </form>
            </div>
        </section>

        <!-- Extra Fans Section -->
        <section class="realmadrid-fans container">
            <h2>⭐ Bashkohu me Mbretërit e Evropës</h2>
            <p>Kontakti yt do të ruhet në zemrat e tifozëve madrilenë.  
            <strong>14x Champions League</strong>, <strong>35x La Liga</strong> – Real Madrid është historia e futbollit.</p>
        </section>

    </main>
</div>

<?php get_footer(); ?>
