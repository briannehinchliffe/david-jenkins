(function (wp) {
	const { registerBlockType } = wp.blocks;
	const { useBlockProps, InspectorControls } = wp.blockEditor;
	const { PanelBody, TextControl, TextareaControl, Disabled } = wp.components;
	const ServerSideRender = wp.serverSideRender;
	const { createElement: el, Fragment } = wp.element;

	registerBlockType('david-jenkins/actblue-donation', {
		edit: function (props) {
			const blockProps = useBlockProps();
			const { attributes, setAttributes } = props;

			return el(
				Fragment,
				{},
				// Sidebar controls for block attributes
				el(
					InspectorControls,
					{},
					el(
						PanelBody,
						{ title: 'Donation Settings', initialOpen: true },
						el(TextControl, {
							label: 'ActBlue Destination URL',
							value: attributes.actblueUrl,
							onChange: (value) =>
								setAttributes({ actblueUrl: value }),
						}),
						el(TextareaControl, {
							label: 'Disclaimer Text',
							value: attributes.disclaimerText,
							onChange: (value) =>
								setAttributes({ disclaimerText: value }),
						})
					)
				),
				// Editor canvas preview with Disabled wrapper for seamless selection
				el(
					'div',
					blockProps,
					el(
						Disabled,
						{},
						el(ServerSideRender, {
							block: 'david-jenkins/actblue-donation',
							attributes: attributes,
						})
					)
				)
			);
		},
		save: function () {
			return null; // Dynamic rendering handled by render.php
		},
	});
})(window.wp);
