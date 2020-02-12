<?php

/*
Plugin Name: University of Tennessee Knoxville Design System
Plugin URI: https://github.com/mathewjordan/utk-design-system
Description: Custom configuration and structure of UT Knoxville Design System
Version: 0.0.1
Author: Mat Jordan
Author URI: https://github.com/mathewjordan
*/

/*
 * !important: this file should be deployed to directory  /wp-content/mu-plugins/ to reference the mu-plugin package
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require('utk_library/utk-library.php');
