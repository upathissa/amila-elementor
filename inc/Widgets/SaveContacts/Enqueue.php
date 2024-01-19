<?php

namespace Elementor_Test_Addon\Widgets\SaveContacts;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Enqueue
{
    protected $plugin_root;

    public function __construct($plugin_root)
    {
        $this->plugin_root = $plugin_root;
    }
    public function stylesNscripts()
    {
        // styles 
        wp_register_style(
            'amila-savecontact',
            plugins_url('assets/css/savecontent.min.css', $this->plugin_root)

        );

        // scripts
        wp_register_script(
            'amila-savecontact',
            plugins_url('assets/js/savecontent.js', $this->plugin_root),
            [],
            '1.0.0',
            true
        );
    }
}
