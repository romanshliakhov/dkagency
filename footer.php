<?php
$build_folder = get_template_directory_uri() . '/assets/';
$footer__logo = get_field( 'logo', 'options' );
?>

</main>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <?php if ( $footer__logo ) : ?>
                <a class="footer__logo"
                href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url( $footer__logo['url'] ); ?>"
                        alt="<?php echo esc_attr( $footer__logo['alt'] ); ?>" />
                </a>
            <?php endif; ?>

            <div class="footer__menu">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer_nav',
                    'container' => 'nav',
                    'container_class' => 'main-nav',
                    'menu_class' => 'main-nav__list',
                ) ); ?>
            </div>

            <a class="footer__btn btn" href="<?php echo home_url(); ?>/contacts">Order site</a>
        </div>
    </div>
    
    <p class="footer__copyright">© 2024 Copyright - DK. All rights reserved.</p>
</footer>
<?php
    load_template(get_template_directory() . '/components/modals.php', true);
    wp_footer();
?>
</body>
</html>