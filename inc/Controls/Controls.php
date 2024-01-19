<?php

namespace Elementor_Test_Addon\Controls;

use Elementor_Test_Addon\Controls\Currency\Elementor_Currency_Control;




class Controls
{
    public function register_controls($controls_manager)
    {
        $controls_manager->register(new Elementor_Currency_Control());
    }
}
