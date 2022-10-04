<?php

namespace App\Acf;

if (!defined('ABSPATH')) {
    exit;
}

class Acf
{

    public static function createOptionsPage(): void
    {
        if (function_exists('acf_add_options_page')) {

            acf_add_options_page(array(
                'page_title'     => 'Theme General Settings',
                'menu_title'    => 'Theme Settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'        => false
            ));

            acf_add_options_sub_page(array(
                'page_title'     => 'Countries',
                'menu_title'    => 'Countries',
                'parent_slug'    => 'theme-general-settings',
            ));
        }
    }

    public static function handleAcfApi()
    {
        // add_filter('acf/rest_api/field_settings/show_in_rest', '__return_true');

        // Enable the option show in rest
        // add_filter('acf/rest_api/field_settings/show_in_rest', '__return_true');

        // Enable the option edit in rest
        // add_filter('acf/rest_api/field_settings/edit_in_rest', '__return_true');
    }
}
