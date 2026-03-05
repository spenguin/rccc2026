<?php
/**
 * Navigation
 */
?>
    <section class="navigation">
        <div class="menu__btn_text menu__btn--open">Menu</div>
        <div class="menu away">
            <div class="menu__btn_text menu__btn--close">Close</div>
            <?php wp_nav_menu( ['menu'=>'Main Menu', 'menu_class'=>'menu__list', 'container_class'=>'menu__list--container'] ); ?>
        </div>
    </section>
    <script>
        jQuery(function(){
            jQuery('.menu__btn_text' ).click(function(){
                jQuery('.menu').toggleClass('away');
                jQuery('.menu__btn--open').toggleClass('hidden');
            });
        });
    </script>