<?php

namespace Elementor_Test_Addon\Widgets\SaveContacts;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class InitData
{
    public static function add_filter()
    {
        return [
            'text_domain'       => 'amila-save-contacts',
            'plugin_root'       => SAVECONTACT_PLUGIN_ROOT,
            'widget' => [
                'name'          => 'amila_save_contacts',
                'title'         => 'Save Contact',
                'icon'          => 'eicon-library-save', //https://elementor.github.io/elementor-icons/
                'categories'    => ['amila'],
                'keywords'      => ['contact', 'save', 'contact save', 'phone'],
            ],
            'controls'          => [
                'profile' => [
                    'control_section_name'  => 'savecontact_profile_control',
                    'section_lable'         => 'Profile',
                    'image_name'            => 'profile_image',
                    'first_name'            => 'first_name'


                ],
            ],

            'repeaters' => [
                'name'          => 'Details',
                'section_name'  => 'Details Section',
                'elements'      => ''
            ]
        ];
    }
}
