<?php
/**
 * Display Panels using CPT panel
 */

function panels( $atts = [], $content = null, $tag = '' )
{

    $args = [
        'post_type'         => 'panel',
        'posts_per_page'    => -1,
        'meta_key'          => 'start_time',
        'orderby'           => 'meta_value_num',
        'order'             => 'ASC',
        'tax_query'         => [[
            'taxonomy'      => 'panel-event',
            'field'         => 'name',
            'terms'         => $atts['event']
        ]]
    ];

    $query  = new WP_Query($args); 

    ob_start();
    if( $query->have_posts()):  ?>
        <section class="panels">
            <?php while( $query->have_posts()): $query->the_post(); 
                $custom = get_post_custom();
            ?>
                <div class="panel">
                    <div class="panel__wrapper max-wrapper__narrow">
                        <div class="panel__time">
                            <?php echo $custom['start_time'][0] . ' to ' . $custom['end_time'][0]; ?>
                        </div>
                        <div class="panel__text">
                            <h2><?php echo get_the_title(); ?></h2>
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </section>
    <?php
        else: ?>
        <p>We’re working on the panels for Rain City Comicon. Check back later to see what we come up with.</p>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}        
