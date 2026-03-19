<?php
/**
 * Sponsor functions
 */

class sponsorFns
{
    static function listSponsors()
    {
        $args = [
            'post_type'    => 'sponsor',
            'posts_per_page'=> -1
        ];

        $query = new WP_Query($args);

        if( $query->have_posts()): ?>
            <div class="sponsor-list car--list max-wrapper__narrow">
                <?php while( $query->have_posts() ): $query->the_post(); ?>
                    <div class="sponsor-list__item card--list__item">
                        <h3><?php the_title(); ?></h3>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); 
    }

}