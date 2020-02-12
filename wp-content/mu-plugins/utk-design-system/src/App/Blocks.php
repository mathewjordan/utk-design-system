<?php

namespace UTK\DesignSystem\App;

class Blocks
{

    public function __construct()
    {
        add_action( 'enqueue_block_editor_assets', [__CLASS__, 'extend_gutenberg'] );
        add_action( 'after_setup_theme', [__CLASS__, 'disable_custom_colors'] );
    }

    function extend_gutenberg() {
        wp_enqueue_script(
            'utk/extend-gutenberg',
            WPMU_PLUGIN_URL . '/utk-design-system/dist/extendBlocks.js',
            array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor', 'wp-hooks' ),
            '1.0.0',
            true // enqueue the script in the footer.
        );
    }

    /**
     * Disable the custom color picker.
     */
    function disable_custom_colors() {

        add_theme_support('editor-color-palette', [
            [
                'name'  => esc_html__( 'Globe', 'ut-libraries' ),
                'slug' => 'globe',
                'color' => '#006c93',
            ],
            [
                'name'  => esc_html__( 'Smokey', 'ut-libraries' ),
                'slug' => 'smokey',
                'color' => '#58595b',
            ],
            [
                'name'  => esc_html__( 'Globe', 'ut-libraries' ),
                'slug' => 'muted',
                'color' => '#e0e0e0',
            ]
        ]);

        // be strict on the options
        add_theme_support('disable-custom-gradients');
        add_theme_support('disable-custom-font-sizes');
        add_theme_support('disable-custom-colors');
    }

}
