<?php
define('WT_DS', '/');

function WT_ASSET( $path ){
    return get_template_directory_uri() . WT_DS . 'assets' . WT_DS . $path;
}

function WT_PARTIALS( $path ){
    return get_theme_file_path('partials') . WT_DS . $path;
}

function WT_LINK_BOOKING( $id ){
    return get_site_url().'?page_id=29&post_id='.$id;
}

add_action('init', 'WT_PARTIALS');

?>