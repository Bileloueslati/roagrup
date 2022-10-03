<?php

$composer_autoload = __DIR__ . '/vendor/autoload.php';

if (!file_exists($composer_autoload)) {
    echo "Please run composer install to initialize autoload";
    exit;
}

require_once $composer_autoload;

use App\Acf\Acf;
use App\Theme\Requirements;
use App\Theme\Theme;

$theme = new Theme();

$isSupported = Requirements::check();

if (!$isSupported) {
    echo "Please install required plugins first";
    exit;
}

Acf::createOptionsPage();

Acf::handleAcfApi();

header("Access-Control-Allow-Origin: *");
