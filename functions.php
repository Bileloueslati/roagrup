<?php

add_theme_support('post-thumbnails');

add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
}, 15);

add_filter('rest_url', function ($url) {
    return str_replace(home_url(), site_url(), $url);
});

header("Access-Control-Allow-Origin: *");


