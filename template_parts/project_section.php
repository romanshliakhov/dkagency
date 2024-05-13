<?php $categories = get_terms('project_category', array('hide_empty' => true)); ?>

<section id="portfolio" class="projects-section">
    <div class="container">
        <div class="projects-section__inner">
            <?php if (!empty($categories) && !is_wp_error($categories)) : ?>
                <ul class="projects-categories" data-aos="fade-up" data-aos-delay="100">
                    <li class="projects-categories__item">
                        <button data-term-id="all" class="projects-categories__btn">
                            <?php echo pll__('Все проэкты'); ?>
                        </button>
                    </li>
                    <?php foreach ($categories as $category) : ?>
                        <li class="projects-categories__item">
                            <button data-term-id="<?php echo esc_attr($category->term_id); ?>"
                                    class="projects-categories__btn">
                                <?php echo esc_html($category->name); ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="projects-section__box" data-aos="fade-up" data-aos-delay="200">
                <ul class="project-list"></ul>

                <button class="main-button project-list-more" type="button">
	                <?php echo pll__('Еще'); ?>
                </button>
            </div>
        </div>
    </div>
</section>






