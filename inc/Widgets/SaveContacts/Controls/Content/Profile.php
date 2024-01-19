<?php

namespace Elementor_Test_Addon\Widgets\SaveContacts\Controls\Content;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Profile
{
    public static function add($widget, $args = [])
    {
        $image_name = $args['image_name'];
        $section_name = $args['control_section_name'];
        $section_lable = $args['section_lable'];

        $first_name = $args['first_name'];

        $widget->start_controls_section(
            $section_name,
            [
                'label' => esc_html__($section_lable, AMILAS_PLUGIN_TEXT_DOMAIN),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        /**
         * 
         * Profile Picture
         */
        $widget->add_control(
            $image_name,
            [
                'label' => esc_html__('Choose Image', AMILAS_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $widget->add_group_control(
            \Elementor\Group_Control_Image_Size::get_type(),
            [
                'name' => $image_name,
                'default' => 'thumbnail',
                'separator' => 'none',
            ]
        );
        /**
         *  First Name
         */
        $widget->add_control(
            $first_name,
            [
                'label' => esc_html__('First Name', AMILAS_PLUGIN_TEXT_DOMAIN),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('First Name', AMILAS_PLUGIN_TEXT_DOMAIN),
                'ai' => [
                    'active' => false,
                ],
            ]
        );
        $widget->end_controls_section();
    }
}
