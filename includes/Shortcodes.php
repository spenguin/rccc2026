<?php

namespace Shortcodes;

// require_once CORE_SHORTCODE . 'rcc_navigation.php';
// require_once CORE_SHORTCODE . 'rcc_organisers.php';
// require_once CORE_SHORTCODE . 'rcc_panels.php';
// require_once CORE_SHORTCODE . 'rcc_posters.php';
// require_once CORE_SHORTCODE . 'rcc_exhibitors.php';
require_once CORE_SHORTCODE . 'countdown.php';
require_once CORE_SHORTCODE . 'headerText.php';
require_once CORE_SHORTCODE . 'applicationForm.php';


\Shortcodes\initialize();

function initialize()
{
    add_shortcode( 'countdown', '\countdown' );
    add_shortcode( 'headerText', '\headerText' );
    add_shortcode( 'applicationForm', '\applicationForm' );
    // add_shortcode( 'rcc_organisers', '\rcc_organisers' );
    // add_shortcode( 'rcc_panels', '\rcc_panels' );
    // add_shortcode( 'rcc_posters', '\rcc_posters' );
    // add_shortcode( 'rcc_exhibitors', '\rcc_exhibitors' );
}