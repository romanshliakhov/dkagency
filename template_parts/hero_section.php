<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $video = get_sub_field( 'video' );
?>

<section class="hero-section">
	<?php if ( $video ) : ?>
        <video class="hero-section__video" autoplay muted loop playsinline preload="auto">
            <source src="<?php echo $video['url']; ?>" type="<?php echo $video['mime_type']; ?>">
        </video>
	<?php endif; ?>

    <div class="hero-section__wrapp">
        <div class="hero-section__frame">
            <picture>
                <source type='image/webp' srcset='<?php echo $build_folder; ?>img/frame.webp'>
                <img width='446' height='621' src='<?php echo $build_folder; ?>img/frame.png' alt='Frame'>
            </picture>
        </div>

        <div class="hero-section__box">
            <div class="hero-section__box-top">Empower Your online <br> Growth with DK</div>
            <div class="hero-section__box-dev">WEB-SITE <br> DEVELOPMENT;</div>
            <div class="hero-section__box-socials"><span>FACEBOOK</span> & <br> <span>GOOGLE</span> ADS;</div>
            <div class="hero-section__box-marketing">Marketing</div>
            <div class="hero-section__box-seo">SEO</div>
            <div class="hero-section__box-bottom">Tailored for Your Success</div>
        </div>
    </div>
</section>




