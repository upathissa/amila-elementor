<?php

namespace Elementor_Test_Addon\Widgets\Experience\Tab\Style;



if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class HeaderStyles
{
    public static function add_header_style_section($widget, $args)
    {
        $widget->start_controls_section(
            'section_title_style',
            [
                'label' => esc_html__('Header Title', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $widget->add_control(
            'title_color',
            [
                'label' => esc_html__('Text Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .' . $args['header_class_name'] => 'color: {{VALUE}};',
                ],
            ]
        );

        // Typography Control
        $widget->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'selector' => '{{WRAPPER}} .' . $args['header_class_name'],
            ]
        );

        $widget->end_controls_section();
    }
}
