<?php

function tecnic_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'tecnic'),
    ));
}

add_action('init', 'tecnic_menus');
