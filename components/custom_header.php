<?php
$header_logo = get_field( 'logo', 'options' );
?>

<header class="header fixed-block">
    <div class="container">
        <div class="header__inner">
	        <?php if ( $header_logo ) : ?>
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <img width="50" height="42" src="<?php echo esc_url( $header_logo['url'] ); ?>"
                         alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
                </a>
	        <?php endif; ?>

            <div class="header__menu">
	            <?php wp_nav_menu( array(
		            'theme_location' => 'header_nav',
		            'container' => 'nav',
		            'container_class' => 'main-nav',
		            'menu_class' => 'main-nav__list',
	            ) ); ?>

                <a class="header__btn btn menu-link" href="#contacts">Contact Us</a>
            </div>
            
            <button class="burger" type="button">
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>



