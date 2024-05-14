<?php
    $build_folder = get_template_directory_uri() . '/assets/';
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );

    $aside_heading = get_sub_field( 'aside_heading' );
    $aside_descr = get_sub_field( 'aside_descr' );

    $service_row = have_rows('services-section__list');
    

    
?>

<section class="services-section" id="services">
    <div class="container">
        <div class="services-section__inner">
            <div class="services-section__top">
                <?php display_main_top_section('h2',$title, $text) ?>
            </div>

            <div class="services-section__wrapp">
                <div class="services-section__aside">
                    <span class="services-section__aside-heading"><?php echo $aside_heading ?></span>

                    <p class="services-section__aside-descr"><?php echo $aside_descr ?></p>
                </div>

                <?php if (have_rows('services-section__list')) : ?>
                    <ul class="services-section__lists">
                        <?php while (have_rows('services-section__list')) : the_row(); 
                            $service_icon = get_sub_field( 'service_icon' );
                            $service_heading = get_sub_field( 'service_title' );
                            $service_descr = get_sub_field( 'service_descr' );
                            ?>
                            
                            <li class="services-section__lists-row">
                                <span class="services-section__lists-icon">
                                    <img width='144' height='144' src="<?php echo esc_url( $service_icon['url'] ); ?>" 
                                            alt="<?php echo esc_attr( $service_icon['alt'] ); ?>" />
                                </span>

                                <div class="services-section__lists-info">
                                    <span class="services-section__lists-heading"><?php echo $service_heading?></span>

                                    <p class="services-section__lists-descr"><?php echo $service_descr ?></p>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>