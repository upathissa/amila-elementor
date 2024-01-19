<?php

namespace Elementor_Test_Addon\Widgets\Experience\Tab\Content;



if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Details
{
    public static function add_details_section($widget, $args)
    {
        $widget->start_controls_section(
            'minicv_experience_details',
            [
                'label' => esc_html__('Details', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        /**
         * 
         * Repeater Control
         */
        // $repeater = new \Elementor\Repeater();

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'exp_header',
            [
                'label' => esc_html__('Header', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Wordpress Developer', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );
        $repeater->add_control(
            'exp_sub_header',
            [
                'label' => esc_html__('Sub Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('From ' . (date("Y") - 1) . ' to ' . date("Y") . ' | coder.lk', 'textdomain'),
                'label_block' => true,
            ]

        );

        $repeater->add_control(
            'exp_content',
            [
                'label' => esc_html__('Description', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates facere quaerat incidunt magni reiciendis culpa, possimus neque dolor, ut accusantium molestias labore ex iure harum earum itaque, aperiam quibusdam!', 'elementor-addon'),
            ]
        );

        $widget->add_control(
            'details_list',
            [
                'label' => esc_html__('Repeater List', 'textdomain'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'exp_header' => esc_html__('Master of Desing', 'textdomain'),
                        'exp_sub_header' => esc_html__('From 2020 to 2023 | Tech Soft', 'textdomain'),
                        'exp_content' => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates facere quaerat incidunt magni reiciendis culpa, possimus neque dolor, ut accusantium molestias labore ex iure harum earum itaque, aperiam quibusdam!', 'textdomain'),
                    ],
                    [
                        'exp_header' => esc_html__('Ui / Ux Designer', 'textdomain'),
                        'exp_sub_header' => esc_html__('From 2018 to 2020 | Adobe In', 'textdomain'),
                        'exp_content' => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates facere quaerat incidunt magni reiciendis culpa, possimus neque dolor, ut accusantium molestias labore ex iure harum earum itaque, aperiam quibusdam!', 'textdomain'),
                    ],
                    [
                        'exp_header' => esc_html__('Web Developer', 'textdomain'),
                        'exp_sub_header' => esc_html__('From 2017 to 2018 | Coding Art', 'textdomain'),
                        'exp_content' => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque voluptates facere quaerat incidunt magni reiciendis culpa, possimus neque dolor, ut accusantium molestias labore ex iure harum earum itaque, aperiam quibusdam!', 'textdomain'),
                    ],
                ],
                'title_field' => '{{{ exp_header }}}',
            ]
        );

        $widget->end_controls_section();
    }
}
