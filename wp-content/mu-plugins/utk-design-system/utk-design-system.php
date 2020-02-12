<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require ('vendor/autoload.php');

function run() {
    $plugin = new UTK\DesignSystem\Run();
    $plugin->run();
}

run();
