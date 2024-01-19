<?php



/**
 * Plugin Name: Elementor Test Addon
 * Description: Custom Elementor addon.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-test-addon
 * 
 * Elementor tested up to: 3.16.0
 * Elementor Pro tested up to: 3.16.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('SAVECONTACT_PLUGIN_ROOT', plugin_dir_path(__FILE__));
define('AMILAS_PLUGIN_TEXT_DOMAIN', 'amila-save-contacts');
// wp_die(SAVECONTACT_PLUGIN_ROOT);

require_once(__DIR__ . '/vendor/autoload.php');

use Elementor_Test_Addon\Plugin;

function elementor_test_addon()
{


    // Run the plugin
    Plugin::instance();
}
add_action('plugins_loaded', 'elementor_test_addon');

// enque script and styles
function amila_savecontact_styles_n_scripts()
{
    // styles 
    wp_register_style(
        'amila-savecontact',
        plugins_url('assets/css/savecontent.min.css', __FILE__)

    );

    // scripts
    wp_register_script(
        'amila-savecontact',
        plugins_url('assets/js/savecontent.js', __FILE__),
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'amila_savecontact_styles_n_scripts');
// add_action('admin_enqueue_scripts', 'amila_savecontact_styles_n_scripts');
