<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
    $bg = get_sub_field( 'background_image' );
?>

<section class="hero-section">
	<?php if ( $bg ) : ?>
        <div class="hero-section__bg">
            <img src="<?php echo esc_url( $bg['url'] ); ?>"
                 alt="<?php echo esc_attr( $bg['alt'] ); ?>" />
        </div>
	<?php endif; ?>

    <div class="container">
        <div class="hero-section__inner">
            <?php display_main_top_section('h2',$title, $text) ?>



        </div>
    </div>
</section>




