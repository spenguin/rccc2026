<?php
/**
 * Display Testimonials
 */

function testimonials( $atts = [], $content = null, $tag = '' )
{
    $args = [
        'post_type'         => 'testimonial',
        'posts_per_page'    => -1
    ];

    $query = new WP_Query($args); 

    if( $query->have_posts()): 
        ob_start();
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
        <div class="testimonials splide max-wrapper__narrow">
            <div class="splide__track">
                <h2>Praise for Rain City Comicon 2025</h2>
                <ul class="splide__list">
                    <?php 
                        while( $query->have_posts()): $query->the_post(); ?>
                            <li class="splide__slide testimonials__item">
                                <p><?php echo get_the_content(); ?></p>    
                                <p class="credit"><?php echo get_the_title(); ?></p>
                            </li>
                        <?php endwhile; ?>
		        </ul>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide' );
    splide.mount();
  } );
</script>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}