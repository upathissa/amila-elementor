<?php

namespace Elementor_Test_Addon\Widgets;

use Elementor_Test_Addon\Widgets\Currency;
use Elementor_Test_Addon\Widgets\HeloWorld;
use Elementor_Test_Addon\Widgets\Experience;
use Elementor_Test_Addon\Widgets\SaveContacts;
use Elementor_Test_Addon\Widgets\SaveContacts\Enqueue;
use Elementor_Test_Addon\Widgets\SaveContacts\InitData;

class Widgets
{
    public function __construct()
    {
        add_action('elementor/elements/categories_registered', [$this, 'add_widget_category']);
        add_filter('amila_elementor_exp_widget_data', [$this, 'register_filter_exp_widget_data']);

        //Save Contact Widget
        add_filter('amila_elementor_save_contacts_widget_data', [InitData::class, 'add_filter']);

        // $savecontact_enqueue = new Enqueue(SAVECONTACT_PLUGIN_ROOT);
        // add_action('wp_enqueue_scripts', [$savecontact_enqueue, 'stylesNscripts']);
        // add_action('admin_enqueue_scripts', [$savecontact_enqueue, 'stylesNscripts']);
    }
    public function register_widgets($widgets_manager)
    {


        $widgets_manager->register(new HeloWorld());
        $widgets_manager->register(new Experience());
        $widgets_manager->register(new Currency());
        $widgets_manager->register(new SaveContacts());
    }

    public function add_widget_category($elements_manager)
    {
        $elements_manager->add_category(
            'amila',
            [
                'title' => esc_html__('Amila\'s Category', 'textdomain'),
                'icon' => 'fa-solid fa-a',
            ]
        );
    }


    public function register_filter_exp_widget_data($data)
    {
        $data['text_domain'] = 'amila_minCv';
        $data['headline'] = 'minicv_exp_title';

        return $data;
    }
}
