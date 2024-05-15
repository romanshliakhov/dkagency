<?php
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
	$bg = get_sub_field( 'background_image' );
    $form_shortcode = get_sub_field( 'form_shortcode' );
?>



<section class="form-section" id="contacts">
	<?php if ( $bg ) : ?>
        <div class="form-section__bg">
            <img src="<?php echo esc_url( $bg['url'] ); ?>"
                 alt="<?php echo esc_attr( $bg['alt'] ); ?>" />
        </div>
	<?php endif; ?>


	<div class="container">
		<div class="form-section__inner">
			<?php display_main_top_section('h2',$title, $text) ?>

            <div class="form-section__inner-wrapp"  data-aos="fade-left" data-aos-delay="200">
	            <?php echo do_shortcode($form_shortcode); ?>
            </div>

		</div>
	</div>



</section>