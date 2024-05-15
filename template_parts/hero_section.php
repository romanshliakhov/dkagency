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
</section>




