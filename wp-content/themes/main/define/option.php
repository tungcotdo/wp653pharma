<?php
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Home',
        'menu_title' => 'Home',
        'menu_slug' => 'home-page',
        'capability' => 'edit_posts',
        'position' => '2',
        'icon_url' => 'dashicons-admin-home',
    ));
}