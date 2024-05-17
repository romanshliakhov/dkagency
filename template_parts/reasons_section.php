<?php
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );
?>

<section class="reasons-section" id="reasons">
    <div class="container">
        <div class="reasons-section__inner">
            <?php display_main_top_section('h2',$title, $text) ?>

            <?php if (have_rows('reasons-section__list')) : ?>
                <ul class="reasons-section__lists">
                    <?php while (have_rows('reasons-section__list')) : the_row(); 
                        $reasons_heading = get_sub_field( 'reasons_title' );
                        $reasons_descr = get_sub_field( 'reasons_descr' );
                        ?>
                        
                        <li class="reasons-section__lists-row" data-aos="fade-up" data-aos-offset="300" data-aos-easing="linear" data-aos-duration="500">
                            <span class="reasons-section__lists-heading"><?php echo $reasons_heading ?></span>

                            <p class="reasons-section__lists-descr"><?php echo $reasons_descr ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>