<?php

if (!defined('MERCURY_PATH')) {
    return;
}

// Load configuration, classes, and functions
$atlas = json_decode(file_get_contents(MERCURY_PATH . '/config.json'));

require_once MERCURY_PATH . '/config.php';
require_once MERCURY_PATH . '/vendor/autoload.php';

// Load requested page
require_once __DIR__ . '/load.php';
