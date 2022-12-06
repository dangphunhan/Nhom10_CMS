( function( blocks, element ) {
    var el = element.createElement;
    var blockStyle = {
        backgroundColor: '#2E56E6',
        color: '#fff',
        padding: '-30px',
        border: "3px solid yellow",
    };
        blocks.registerBlockType( 'gutenberg-examples/example-01', {
        title: 'Example: H5',
        icon: 'universal-access-alt',
        category: 'layout',
        edit: function() {
            return el(
                'h5',
                { style: blockStyle},
                'Người đưa tin - nhóm 10',
            );
        },
        save: function() {
            return el(
                'h5',
                {  style: blockStyle},
                'Người đưa tin - nhóm 10',

            );
        
        },
    } );
}(
    window.wp.blocks,
    window.wp.element
));
