<?php
/**
 * Display Header Text
 */

function headerText( $atts = [], $content = null, $tag = '' )
{
    ?>
        <div class="logo">
            <div class="logo__image">
                <img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/furniture/HeaderBackgroundImage.png" alt="Rain City Comicon 2026" />
            </div>
            <div class="logo__text">
                <h1><?php echo $content; ?></h1>
            </div>
        </div>
    <?php
    
}