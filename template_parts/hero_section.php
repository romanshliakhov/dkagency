<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $video = get_sub_field( 'background_video' );
?>

<section class="hero-section">
	<?php if ( $video ) : ?>
        <div class="hero-section__video">
            <img src="<?php echo esc_url( $bg['url'] ); ?>"
                 alt="<?php echo esc_attr( $bg['alt'] ); ?>" />
        </div>
	<?php endif; ?>
</section>




