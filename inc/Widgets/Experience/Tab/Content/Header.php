<?php

namespace Elementor_Test_Addon\Widgets\Experience\Tab\Content;



if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Header
{
    public static function add_header_section($widget, $args)
    {
        $widget->start_controls_section(
            'minicv_experience_section',
            [
                'label' => esc_html__('Section Header', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        /**
         * 
         * Title Section
         */
        $widget->add_control(
            'header_title',
            [
                'label' => esc_html__('Section Header', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Experiences', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );

        /**
         * 
         * Alignment Section
         */
        $widget->add_control(
            'text_align',
            [
                'label' => esc_html__('Alignment', 'textdomain'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'textdomain'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'textdomain'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'textdomain'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .' . $args['header_class_name'] => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $widget->end_controls_section();
    }
}
