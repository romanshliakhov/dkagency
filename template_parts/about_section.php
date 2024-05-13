<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
    $bg = get_sub_field( 'background_image' );
    $link = get_sub_field( 'button' );
?>

<section class="about-section" id="about">

	<?php if ( $bg ) : ?>
        <div class="about-section__bg" data-aos="fade-right" data-aos-delay="300">
            <img src="<?php echo esc_url( $bg['url'] ); ?>"
                 alt="<?php echo esc_attr( $bg['alt'] ); ?>" />
        </div>
	<?php endif; ?>
    <div class="container">
        <div class="about-section__inner">
            <?php display_main_top_section('h2',$title, $text) ?>

	        <?php if ( $link ) :
		        $link_url = $link['url'];
		        $link_title = $link['title'];
		        $link_target = $link['target'] ? $link['target'] : '_self';
		        ?>
                <a class="main-button" href="<?php echo esc_url( $link_url ); ?>"
                   target="<?php echo esc_attr( $link_target ); ?>"
                   data-aos="fade-up" data-aos-delay="300">
			        <?php echo esc_html( $link_title ); ?>
                </a>
	        <?php endif; ?>

        </div>
    </div>
</section>