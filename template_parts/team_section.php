<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
    $team_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1 ));
?>

<section class="team-section" id="team">
    <div class="container">
        <div class="team-section__inner">


	        <?php display_main_top_section('h2',$title, $text) ?>

            <div class="swiper-container" data-aos="fade-left" data-aos-delay="100">
	            <?php if ($team_query->have_posts()) : ?>
                    <ul class="swiper-wrapper">
			            <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
                            <li class="swiper-slide team-card">
                                <div class="team-card__image">
	                                <?php if ( has_post_thumbnail() ): ?>
		                                <?php the_post_thumbnail(); ?>
	                                <?php else: ?>
                                        <img src="<?php echo esc_url( $build_folder ); ?>/img/no-image.png" alt="no_image">
	                                <?php endif; ?>
                                </div>

                                <div class="team-card__description">
                                    <h2 class="team-card__name"><?php the_title(); ?></h2>
                                    <p class="team-card__job">
                                        <?php echo esc_html(get_field( 'job_title' )); ?>
                                    </p>
                                    <div class="team-card__text">
		                                <?php the_content(); ?>
                                    </div>
                                </div>
                            </li>
			            <?php endwhile; ?>
                    </ul>
		            <?php wp_reset_postdata(); ?>
	            <?php endif; ?>
            </div>

             <div class="team-section__buttons" data-aos="fade-up" data-aos-delay="200">
                 <button class="slider-button team-section__prev">
                     <svg width="12" height="22">
                     	<use href="<?php echo $build_folder?>img/sprite/sprite.svg#arrow-l"></use>
                     </svg>
                 </button>

                 <button class="slider-button team-section__next">
                     <svg width="12" height="22">
                         <use href="<?php echo $build_folder?>img/sprite/sprite.svg#arrow-r"></use>
                     </svg>
                 </button>
             </div>
        </div>
    </div>
</section>


