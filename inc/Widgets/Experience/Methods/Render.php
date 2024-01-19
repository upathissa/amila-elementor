<?php

namespace Elementor_Test_Addon\Widgets\Experience\Methods;


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Render
{
    public static function content($widget, $args)
    {
        $settings = $widget->get_settings_for_display();
        echo '<h2 class="' . $args['header_class_name'] . ' section-title">' . $settings['header_title'] . '</h2>';
        echo '<div class="experience__container acv-grid">';
        // echo '';
        if ($settings['details_list']) {
            $list_items_count = count($settings['details_list']);
            $counter = 0;
            foreach ($settings['details_list'] as $item) {
                $counter++;
                $last_item = $counter === $list_items_count;
                echo '<div class="experience__content">
                <div class="experience__time">
                    <span class="experience__rounder"></span>' .
                    (!$last_item ? '<span class="experience__line"></span>' : '') .
                    '</div>
                <div class="experience__data acv-grid">
                    <h3 class="experience__title">' . $item['exp_header'] . '</h3>
                    <span class="experience__company">' . $item['exp_sub_header'] . '</span>
                    <p class="experience__description">' . $item['exp_content'] . '</p>
                </div>
            </div>';
            }
        }
        echo '</div>'; // close --- experience__container acv-grid
    }
    public static function content_template($widget, $args)
    {
?>
        <h2 class="<?php echo $args['header_class_name']; ?> section-title">{{{settings.header_title}}}</h2>
        <div class="experience__container acv-grid">
            <# if (settings.details_list.length) { #>
                <# var counter=0; #>
                    <# _.each(settings.details_list, function(item) { counter++; var isLastItem=(counter===settings.details_list.length); #>
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                                <# if (!isLastItem) { #>
                                    <span class="experience__line"></span>
                                    <# } #>
                            </div>
                            <div class="experience__data acv-grid">
                                <h3 class="experience__title">{{{ item.exp_header }}}</h3>
                                <span class="experience__company">{{{ item.exp_sub_header }}}</span>
                                <p class="experience__description">{{{ item.exp_content }}}</p>
                            </div>
                        </div>
                        <# }); #>
                            <# } #>
        </div>


<?php
    }
}
