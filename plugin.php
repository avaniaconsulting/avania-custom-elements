<?php

/**
 * Plugin Name: Avania Custom Elements
 * Plugin URI: https://www.avania.fi/
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: Avania Consulting Oy
 * Author URI: https://www.avania.fi/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace AvaniaCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'AvaniaCustomElements',
        'element',
        'Avania Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'AvaniaCustomElements',
        'macro',
        'Avania Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'AvaniaCustomElements',
        'preset',
        'Avania Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
