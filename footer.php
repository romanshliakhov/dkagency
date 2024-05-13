<?php
$build_folder = get_template_directory_uri() . '/assets/';
$footer__logo = get_field( 'footer__logo', 'options' );
$mail = get_field( 'mail', 'options' );
?>

</main>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <button class="trigger to-top">
                top
            </button>
	        <?php if ( $footer__logo ) : ?>
                <a class="footer__logo"
                   href="<?php echo home_url(); ?>">
                    <img src="<?php echo esc_url( $footer__logo['url'] ); ?>"
                         alt="<?php echo esc_attr( $footer__logo['alt'] ); ?>" />
                </a>
	        <?php endif; ?>

            <div class="footer__inner-wrapper">
	            <?php wp_nav_menu( array(
		            'theme_location' => 'footer_nav',
		            'container' => 'nav',
		            'container_class' => 'main-nav',
		            'menu_class' => 'main-nav__list',
		            'menu_id' => 'footer_nav'
	            ) ); ?>
            </div>


            <div class="footer__contact">
                <span><?php echo pll__( 'Свяжитесь с нами' );?></span>

	            <?php if ( $mail ) : ?>
                    <a class="footer__contact-link" href="mailto:<?php echo esc_html( $mail ); ?>">
                        e-mail: <?php echo esc_html( $mail ); ?>
                    </a>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php
    load_template(get_template_directory() . '/components/modals.php', true);
    wp_footer();
?>
</body>
</html>