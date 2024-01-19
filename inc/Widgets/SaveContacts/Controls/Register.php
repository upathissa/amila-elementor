<?php

namespace Elementor_Test_Addon\Widgets\SaveContacts\Controls;

use Elementor_Test_Addon\Widgets\SaveContacts\Controls\Content\Profile;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Register
{
    public static function controls($widget, $args = [])
    {

        /**
         * *************************************************************
         *                  Content Tab Sections
         * *************************************************************
         */

        /**
         * --------------------------------------
         *                  Profile
         * --------------------------------------
         */

        Profile::add($widget, $args['profile']);
        /**
         * *************************************************************
         *                  Style Tab Sections
         * *************************************************************
         */
    }
}
