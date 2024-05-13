<?php
$header_logo = get_field( 'header_logo', 'options' );
$json_folder = get_template_directory_uri() . '/assets/animations';
$preloaderSwitcher = get_field( 'preloader', 'options' );
?>

<?php if ( $preloaderSwitcher) : ?>
    <div class="preloader" data-path="<?php echo $json_folder ?>"></div>
<?php endif; ?>

<header class="header fixed-block">
    <div class="container">
        <div class="header__inner">
	        <?php if ( $header_logo ) : ?>
                <a href="<?php echo home_url(); ?>" class="header__logo">
                    <img width="176" height="82" src="<?php echo esc_url( $header_logo['url'] ); ?>"
                         alt="<?php echo esc_attr( $header_logo['alt'] ); ?>" />
                </a>
	        <?php endif; ?>

            <div class="menu-drawer">
	            <?php wp_nav_menu( array(
		            'theme_location' => 'main_nav',
		            'container' => 'nav',
		            'container_class' => 'main-nav',
		            'menu_class' => 'main-nav__list',
		            'menu_id' => 'header_nav'
	            ) ); ?>

                <ul class="lang-list">
		            <?php if(function_exists('pll_the_languages')):
			            $languages = pll_the_languages(array(
				            'echo' => 0,
				            'show_flags' => 0,
				            'show_names' => 1,
				            'hide_if_no_translation' => 0,
				            'hide_if_empty' => 0,
				            'display_names_as' => 'slug',
				            'force_home' => 1,
				            'hide_current' => 0,
				            'raw' => 1
			            ));

			            foreach($languages as $lang) : $class = ($lang['current_lang']) ? 'active' : ''; ?>
                            <li class="lang-list__item">
                                <a class="lang-list__link <?= $class; ?>"
                                   href="<?= esc_url($lang['url']); ?>">
                                    <?= esc_html($lang['name']); ?>
                                </a>
                            </li>
			            <?php endforeach; ?>
		            <?php endif; ?>
                </ul>
            </div>

            <button class="burger" type="button">
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>