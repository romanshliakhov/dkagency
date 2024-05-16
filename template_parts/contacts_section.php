<?php
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
	$bg = get_sub_field( 'background_image' );
    $form_shortcode = '[contact-form-7 id="11de863" title="Contact form section"]' ;
?>

<section class="contacts-section" id="contacts">
	<?php if ( $bg ) : ?>
        <div class="contacts-section__bg">
            <img src="<?php echo esc_url( $bg['url'] ); ?>"
                 alt="<?php echo esc_attr( $bg['alt'] ); ?>" />
        </div>
	<?php endif; ?>


	<div class="container">
		<div class="contacts-section__inner">
			<?php display_main_top_section('h2',$title, $text) ?>

            <div class="contacts-section__form">
	            <?php echo do_shortcode($form_shortcode); ?>
            </div>
		</div>
	</div>
</section>

