<?php

namespace Elementor_Test_Addon\Widgets;

use Elementor_Test_Addon\Widgets\Experience\Methods\Render;
use Elementor_Test_Addon\Widgets\Experience\Tab\Content\Details;
use Elementor_Test_Addon\Widgets\Experience\Tab\Content\Header;
use Elementor_Test_Addon\Widgets\Experience\Tab\Style\DetailsStyles;
use Elementor_Test_Addon\Widgets\Experience\Tab\Style\HeaderStyles;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Experience extends \Elementor\Widget_Base
{
    protected $expdata;
    protected $widget_data;
    protected $textDomain;
    public function __construct($data = [], $args = null)
    {
        parent::__construct($data, $args);

        $my_data = apply_filters('amila_elementor_exp_widget_data', []);

        // $myData = apply_filters('my_custom_data_for_widget', []);
        // Now you can use $myData in your widget
        $this->textDomain = $my_data['text_domain'];
        $this->expdata['header_class_name'] = $my_data['headline'];
    }

    public function get_name()
    {
        return 'minicv_experience';
    }

    public function get_title()
    {
        return esc_html__('MiniCv Experience', $this->textDomain);
    }

    public function get_icon()
    {
        return 'eicon-kit-details'; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return ['amila'];
    }

    public function get_keywords()
    {
        return ['experience', 'exp', 'minicv'];
    }

    protected function exp_data()
    {
        return [
            'header_class_name' => 'minicv_exp_title'
        ];
    }

    protected function register_controls()
    {

        /**
         * *************************************************************
         *                  Content Tab Sections
         * *************************************************************
         */


        /**
         * --------------------------------------
         *                  Header
         * --------------------------------------
         */

        Header::add_header_section($this, $this->expdata);

        /**
         * --------------------------------------
         *                  Details
         * --------------------------------------
         */

        Details::add_details_section($this, []);


        /**
         * *************************************************************
         *                  Style Tab Sections
         * *************************************************************
         */

        /**
         * --------------------------------------
         *                  Header
         * --------------------------------------
         */
        $header_data = ['header_class_name' => 'minicv_exp_title'];

        HeaderStyles::add_header_style_section($this, $header_data);

        /**
         * --------------------------------------
         *                  Details
         * --------------------------------------
         */
        $detail_data = ['details_title_styles' => 'details_title'];
        DetailsStyles::add_details_style_section($this, $detail_data);
    }

    protected function render()
    {
        $header_data = ['header_class_name' => 'minicv_exp_title'];
        Render::content($this, $header_data);
    }

    protected function content_template()
    {
        $header_data = ['header_class_name' => 'minicv_exp_title'];
        Render::content_template($this, $header_data);
    }
}
