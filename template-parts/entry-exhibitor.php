<?php
/** 
 * Entry template part
 */
?>
<article class="entry exhibitor">
    <div class="exhibitor__wrapper">
        <?php if( has_post_thumbnail() ): ?>
            <div class="exhibitor__image">
                <?php echo get_the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        <div class="exhibitor__text">
            <h1><?php the_title(); ?><h1>
            <?php the_content(); ?>
        </div>
    </div>
</article>