<?php 
    $build_folder = get_template_directory_uri() . '/assets/'; 
    $title = get_sub_field( 'title' );
	$text = get_sub_field( 'text' );
    $form_shortcode = '[contact-form-7 id="678ae30" title="Website form"]' ;
?>

<div data-overlay class="overlay fixed-block">
    <div class="modal" data-popup="done">
        <div class="modal__box" role="dialog" aria-modal="true">
            <button class="close modal__close">
                <svg width="20" height="20">
                	<use href="<?php echo $build_folder ?>img/sprite/sprite.svg#close"></use>
                </svg>
            </button>

            <span class="modal__icon">
                <img src="<?php echo $build_folder ?>img/sprite/success.svg" alt="done">
            </span>
        </div>
    </div>

    <div class="modal" data-popup="order">
        <div class="modal__box" role="dialog" aria-modal="true">
            <button class="close modal__close">
                <svg width="20" height="20">
                	<use href="<?php echo $build_folder ?>img/sprite/sprite.svg#close"></use>
                </svg>
            </button>

            <?php echo do_shortcode($form_shortcode); ?>
        </div>
    </div>
</div>

