<?php

namespace App\Theme;

if (!defined('ABSPATH')) {
    exit;
}

class Requirements
{

    public static function check()
    {

        return class_exists('ACF');
    }
}
