<?php
    $build_folder = get_template_directory_uri() . '/assets/build/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
    $technologies_query = new WP_Query(array('post_type' => 'technologies', 'posts_per_page' => -1 ));
?>

<section class="technologies-section" id="technologies">
	<div class="container">
		<div class="technologies-section__inner">
			<?php display_main_top_section('h2',$title, $text) ?>

			<?php if ($technologies_query->have_posts()) : ?>
                <div class="swiper-container" data-aos="fade-left" data-aos-delay="300">
                    <ul class="swiper-wrapper technologies-list">
                        <?php while ($technologies_query->have_posts()) : $technologies_query->the_post(); ?>
                            <li class="swiper-slide technologies-list__item" >
                                <div class="technologies-card" title="<?php the_title(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
	                                    <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
