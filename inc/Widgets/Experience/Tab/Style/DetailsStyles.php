<?php

namespace Elementor_Test_Addon\Widgets\Experience\Tab\Style;



if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class DetailsStyles
{
    public static function add_details_style_section($widget, $args)
    {
        $widget->start_controls_section(
            'section_details_style',
            [
                'label' => esc_html__('Details', 'elementor-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        $widget->add_control(
            'details_title_color',
            [
                'label' => esc_html__('Title Color', 'elementor-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .' . $args['details_title_styles'] => 'color: {{VALUE}};',
                ],
            ]
        );

        // Typography Control
        $widget->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'details_title_typography',
                'selector' => '{{WRAPPER}} .' . $args['details_title_styles'],
            ]
        );
        $widget->add_control(
            'hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $widget->end_controls_section();
    }
}
