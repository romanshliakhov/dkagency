<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $project_logo = get_field('project_logo');
    $project_title = get_field('title');
    $project_slider = get_field( 'project_slider' );
    $delay = 50;
?>

<?php get_header(); ?>

<section class="single-project">
    <div class="container">
	    <div class="single-project__inner">
		    <?php if ( $project_slider ) : ?>
                <div class="project-slider" data-aos="fade-right">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper">
	                        <?php foreach( $project_slider as $image ) : ?>
                                <li class="swiper-slide">
                                    <div class="project-slider__img">
                                        <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>"
                                             alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                                    </div>
                                </li>
	                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="project-slider__buttons" data-aos="fade-up" data-aos-delay="200">
                        <button class="slider-button project-slider__prev">
                            <svg width="12" height="22">
                                <use href="<?php echo $build_folder?>img/sprite/sprite.svg#arrow-l"></use>
                            </svg>
                        </button>

                        <button class="slider-button project-slider__next">
                            <svg width="12" height="22">
                                <use href="<?php echo $build_folder?>img/sprite/sprite.svg#arrow-r"></use>
                            </svg>
                        </button>
                    </div>
                </div>
		    <?php endif; ?>

            <div class="project-info">
	            <?php if ( $project_logo ) : ?>
                    <div class="project-info__logo" data-aos="fade-left">
                        <img src="<?php echo esc_url( $project_logo['url'] ); ?>"
                             alt="<?php echo esc_attr( $project_logo['alt'] ); ?>" />
                    </div>
	            <?php endif; ?>

	            <?php if ( $project_title ) : ?>
                    <h2 class="project-info__title" data-aos="fade-left" data-aos-delay="<?php echo $delay ?>"><?php echo  $project_title ?></h2>
	            <?php $delay+= 50; endif; ?>

	            <?php if ( have_rows( 'descr_list' ) ) : ?>
                    <ul class="project-info__list">
			            <?php while ( have_rows( 'descr_list' ) ) : the_row();
				            $descr_title = get_sub_field( 'descr_title' );
				            $descr_text = get_sub_field( 'descr_text' );

                        ?>
                            <li class="project-info__item" data-aos="fade-left" data-aos-delay="<?php echo $delay ?>">
	                            <?php if ($descr_title) : ?>
                                    <span class="project-info__item-subtitle">
		                                <?php  echo $descr_title ?>
                                    </span>
	                            <?php endif; ?>

	                            <?php if ($descr_text) : ?>
                                    <span class="project-info__item-text">
		                                <?php  echo $descr_text ?>
                                    </span>
	                            <?php endif; ?>
                            </li>
			            <?php $delay+= 50; endwhile; ?>
                    </ul>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>