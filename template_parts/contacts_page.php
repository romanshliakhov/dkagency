<?php
    $build_folder = get_template_directory_uri() . '/assets/';
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
    $form_shortcode = '[contact-form-7 id="678ae30" title="Website form"]' ;
?>

<section class="contacts-page">
	<div class="contacts-page__left">
		<img width='198' height='220' src='<?php echo $build_folder; ?>/img/left.svg' alt='Left icon'>
	</div>

	<div class="contacts-page__right">
		<img width='213' height='300' src='<?php echo $build_folder; ?>/img/right.svg' alt='Right icon'>
	</div>

	<div class="container">
		<div class="contacts-page__inner">
			<?php display_main_top_section('h2',$title, $text) ?>

            <div class="contacts-page__form">
	            <?php echo do_shortcode($form_shortcode); ?>
            </div>
		</div>
	</div>
</section>

