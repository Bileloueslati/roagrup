<?php

namespace App\Theme;

if (!defined('ABSPATH')) {
    exit;
}

class Theme
{

    public function __construct()
    {
        $this->addThemeSupport();

        $this->addActions();

        $this->addFilters();
    }

    public function addThemeSupport()
    {
        add_theme_support('post-thumbnails');
    }

    public function addActions(): void
    {
        add_action('rest_api_init', function () {
            remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
        }, 15);
    }


    public function addFilters(): void
    {
        add_filter('rest_url', function ($url) {
            return str_replace(home_url(), site_url(), $url);
        });
    }
}
