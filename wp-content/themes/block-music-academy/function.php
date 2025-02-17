<?php
function bma_custom_blocks_init()
{
    register_block_type(__DIR__ . "/build/main-nav");
}

add_action("init", "bma_custom_blocks_init");

function music_school_scripts()
{
    wp_enqueue_style("school-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "music_school_scripts");
