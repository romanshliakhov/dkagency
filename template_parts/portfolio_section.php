<?php
    $title = get_sub_field( 'title' );
    $descr = get_sub_field( 'descr' );
?>

<section class="portfolio-section" id="portfolio">
    <div class="container">
        <div class="portfolio-section__inner">
            <?php display_main_top_section('h2',$title, $descr) ?>

            <?php if (have_rows('portfolio-section__item')) : ?>
                <ul class="portfolio-section__items">
                    <?php while (have_rows('portfolio-section__item')) : the_row(); 
                        $portfolio_preview = get_sub_field( 'preview' );
                        ?>
                        
                        <li class="portfolio-section__item" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear" data-aos-duration="500">
                            <img width='413' height='413' src="<?php echo esc_url( $portfolio_preview['url'] ); ?>" 
                                alt="<?php echo esc_attr( $portfolio_preview['alt'] ); ?>" />
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>