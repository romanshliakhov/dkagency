<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
?>

<section class="hero-section">
    <ul class="bricks"><li></li><li></li><li></li><li></li><li></li></ul>
    <div class="container">
	    <?php load_template(get_template_directory() . '/components/lang_list.php', true); ?>
        <div class="hero-section__inner">
	        <?php if ($title): ?>
                <h1 class="hero-section__title" data-aos="fade-left" data-aos-delay="300">
	                <?php echo $title; ?>
                </h1>
            <?php endif; ?>

            <?php if ($text): ?>
                <div class="hero-section__text" data-aos="fade-left" data-aos-delay="400">
                    <?php echo $text; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <a href="#contacts" class="trigger">
        Scroll
    </a>
</section>




