<?php
    $title = get_sub_field( 'title' );
    $text = get_sub_field( 'text' );


?>

<section class="process-section" id="process">
    <div class="container">
        <div class="process-section__inner">
            <?php display_main_top_section('h2',$title, $text) ?>

            <?php if (have_rows('process-section__list')) : ?>
                <ul class="process-section__lists">
                    <?php while (have_rows('process-section__list')) : the_row(); 
                        $process_icon = get_sub_field( 'process_icon' );
                        $process_heading = get_sub_field( 'process_title' );
                        $process_descr = get_sub_field( 'process_descr' );
                        ?>
                        
                        <li class="process-section__lists-row">
                            <span class="process-section__lists-icon">
                                <img width='50' height='50' src="<?php echo esc_url( $process_icon['url'] ); ?>" 
                                        alt="<?php echo esc_attr( $process_icon['alt'] ); ?>" />
                            </span>

                            <span class="process-section__lists-heading"><?php echo $process_heading ?></span>

                            <p class="process-section__lists-descr"><?php echo $process_descr ?></p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>