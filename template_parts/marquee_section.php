<?php
    $project_slider = get_sub_field("works_slider");
?>


<section class="marquee-section" data-aos="flip-up" data-aos-duration="500">
    <div class="marquee-section__slider swiper-container">
        <ul class="marquee-section__slider-wrapper swiper-wrapper">
            <?php foreach( $project_slider as $image ) : ?>
                    <li class="marquee-section__slide swiper-slide">
                        <div class="marquee-section__slide-img">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </div>
                    </li>
            <?php endforeach; ?>

            <?php foreach( $project_slider as $image ) : ?>
                    <li class="marquee-section__slide swiper-slide">
                        <div class="marquee-section__slide-img">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </div>
                    </li>
            <?php endforeach; ?>

            <?php foreach( $project_slider as $image ) : ?>
                    <li class="marquee-section__slide swiper-slide">
                        <div class="marquee-section__slide-img">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </div>
                    </li>
            <?php endforeach; ?>

            <?php foreach( $project_slider as $image ) : ?>
                    <li class="marquee-section__slide swiper-slide">
                        <div class="marquee-section__slide-img">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </div>
                    </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

