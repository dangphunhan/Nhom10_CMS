wp.blocks.registerBlockType("gutenberg-examples/example-01",{
    title: "Email G2",
    icon: "email",
    category: "common",
    attributes: {
        content: { type: "string"},
    },
    edit: function(props) {
        function updateContent(event) {
            props.setAttributes({content: event.target.value});           
        }
        return React.createElement("form",{
            name: "form",
            action: "#",
        },
        null,
        React.createElement("h3", null, "Email group 10"),
        React.createElement("input",{
            type: "text",
            name: "email",
            id: "email",
            value: props.attributes.content,
            onChange: updateContent,
            required: true,
            placeholder: "Enter your email",
        }),
        );
    },
    save: function(props) {
        if (/\S+@\S+\.\S+/.exec(props.attributes.content)){
            return wp.element.createElement(
                "h3",
                { style: {border: "3px solid"}},
                props.attributes.content,
            );
        } else {
            return ;
        }
    },
});
// /\S+@\S+\.\S+/