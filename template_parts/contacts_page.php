<?php
	$title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
    $form_shortcode = '[contact-form-7 id="678ae30" title="Website form"]' ;
?>

<section class="contacts-page">
	<div class="container">
		<div class="contacts-page__inner">
			<?php display_main_top_section('h2',$title, $text) ?>

            <div class="contacts-page__form">
	            <?php echo do_shortcode($form_shortcode); ?>
            </div>
		</div>
	</div>
</section>

