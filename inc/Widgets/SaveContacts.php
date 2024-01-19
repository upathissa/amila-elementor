<?php

namespace Elementor_Test_Addon\Widgets;

use Elementor_Test_Addon\Widgets\SaveContacts\Widget;
use Elementor_Test_Addon\Widgets\SaveContacts\Content;
use Elementor_Test_Addon\Widgets\SaveContacts\Controls\Profile;
use Elementor_Test_Addon\Widgets\SaveContacts\Controls\Register;



if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class SaveContacts extends Widget
{
    protected $control_data;
    public function __construct($data = [], $args = null)
    {

        parent::__construct($data, $args = null);
        $widgetData = apply_filters('amila_elementor_save_contacts_widget_data', []);
        $this->set_widget_data($widgetData);
        $this->control_data = $widgetData['controls'];
    }



    public function get_script_depends()
    {
        return ['amila-savecontact'];
    }

    public function get_style_depends()
    {
        return ['amila-savecontact'];
    }

    protected function render()
    {
        Content::render($this, []);
    }

    protected function register_controls()
    {
        Register::controls($this, $this->control_data);
        // Profile::add($this, []);

    }

    protected function content_template()
    {
        Content::template($this, ['profile_image' => 'profile_image']);
    }
}

















// class SaveContacts extends \Elementor\Widget_Base
// {
//     protected $textDomain;
//     protected $widget_data;
//     protected $name;


//     public function __construct($data = [], $args = null)
//     {
//         parent::__construct($data, $args);

//         // Get data from register filters
//         $widgetData = apply_filters('amila_elementor_save_contacts_widget_data', []);
//         $this->widget_data = $widgetData['widget'];
//         $this->textDomain = $widgetData['text_domain'];
//         $this->name = $widgetData['widget']['name'];
//     }

//     public function get_name()
//     {
//         return $this->name;
//     }

//     public function get_title()
//     {
//         return esc_html__($this->widget_data['title'], $this->textDomain);
//     }

//     public function get_icon()
//     {
//         return $this->widget_data['icon']; // https://elementor.github.io/elementor-icons/
//     }

//     public function get_categories()
//     {
//         return $this->widget_data['categories'];
//     }

//     public function get_keywords()
//     {
//         return $this->widget_data['keywords'];
//     }
// }
