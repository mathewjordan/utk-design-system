const { __ } = wp.i18n;
const { addFilter } = wp.hooks;

addFilter(
    "blocks.registerBlockType",
    "utk/design-system",
    extendRegisterBlockType
);

function extendRegisterBlockType(settings, name) {

    // Check for block type
    if ("core/button" === name) {

        // Change the block description
        // settings.description = __(
        //     "Use for maximum codiness",
        //     "jsforwpadvblocks"
        // );

    }

    return settings;
}

wp.domReady( () => {
    wp.blocks.unregisterBlockStyle(
        'core/button',
        [ 'default', 'outline', 'squared', 'fill' ]
    );

    wp.blocks.registerBlockStyle( 'core/button', [
        {
            name: 'default',
            label: 'Default',
            isDefault: true
        },
        {
            name: 'icon',
            label: 'With Icon',
        },
        {
            name: 'outline',
            label: 'Outline',
        }
    ]);
} );
