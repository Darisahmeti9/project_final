<footer class="site-footer realmadrid-footer">
    <div class="container footer-container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Real_Madrid_CF.jpg" alt="Real Madrid Logo">
        </div>

        <div class="footer-menu">
            <?php wp_nav_menu( array( 
                'theme_location' => 'wp_devs_footer_menu',
                'depth' => 1,
                'container' => false
            )); ?>
        </div>

        <div class="copyright">
            <p>
                <?php echo get_theme_mod( 'set_copyright', '© ' . date('Y') . ' Real Madrid CF. All Rights Reserved.' ); ?>
            </p>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

