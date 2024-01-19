<?php

namespace Elementor_Test_Addon\Widgets\SaveContacts;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Widget extends \Elementor\Widget_Base
{
    protected $widget_data;
    protected $name;

    protected function set_widget_data($widgetData)
    {
        $this->widget_data = $widgetData['widget'];
        $this->name = $widgetData['widget']['name'];
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_title()
    {
        return esc_html__($this->widget_data['title'], AMILAS_PLUGIN_TEXT_DOMAIN);
    }

    public function get_icon()
    {
        return $this->widget_data['icon']; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return $this->widget_data['categories'];
    }

    public function get_keywords()
    {
        return $this->widget_data['keywords'];
    }
}
