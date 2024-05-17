<?php
    $build_folder = get_template_directory_uri() . '/assets/';
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
    $form_shortcode = '[contact-form-7 id="678ae30" title="Website form"]' ;
?>

<section class="contacts-page">
	<div class="contacts-page__left" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="400">
		<img width='198' height='220' src='<?php echo $build_folder; ?>/img/left.svg' alt='Left icon'>
	</div>

	<div class="contacts-page__right" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="400">
		<img width='213' height='300' src='<?php echo $build_folder; ?>/img/right.svg' alt='Right icon'>
	</div>

	<div class="container">
		<div class="contacts-page__inner" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
			<?php display_main_top_section('h2',$title, $text) ?>

            <div class="contacts-page__form">
	            <?php echo do_shortcode($form_shortcode); ?>
            </div>
		</div>
	</div>
</section>

