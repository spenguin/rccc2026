<?php // Not used
    get_header();  
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/entry', $post->post_type );
    endwhile; endif;
    // get_template_part( 'nav', 'below' );
    get_footer();