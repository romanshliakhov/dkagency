<?php
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
?>

<section class="pricing-section" id="pricing">
    <div class="container">
        <div class="pricing-section__inner">
            <?php display_main_top_section('h2',$title, $text) ?>

            <?php if (have_rows('service')) : ?>
                <ul class="pricing-section__services">
                    <?php while (have_rows('service')) : the_row(); 
                        $service_title = get_sub_field( 'service_title' );
                        $service_price = get_sub_field( 'service_price' );
                        $per_month = get_sub_field('per_month');
                        ?>
                        
                        <li class="pricing-section__service">
                            <span class="pricing-section__service-heading"><?php echo $service_title ?></span>

                            <div class="pricing-section__service-price">
                                from 
                                
                                <?php echo $service_price ?> 

                                <?php if($per_month) : ?>
                                    <span>per month</span>
                                <?php endif; ?>
                            </div>

                            <button class="pricing-section__service-btn btn" data-btn-modal=“order” >Order site</button>

                            <?php if (have_rows('service_advantage')) : ?>
                                <ul class="pricing-section__service-advantages">
                                    <?php while (have_rows('service_advantage')) : the_row(); 
                                        $service_adv = get_sub_field( 'service_adv' );
                                        ?>
                                        
                                        <li class="pricing-section__service-advantage"><?php echo $service_adv ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>