<?php $build_folder = get_template_directory_uri() . '/assets/'?>

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
            <div class="modal__text">
                <h2 class="modal__title">
                    title
                </h2>
                <span class="modal__descr">
                    text
                </span>
            </div>
        </div>
    </div>
</div>