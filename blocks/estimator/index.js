( function ( blocks, element, blockEditor, serverSideRender ) {
	var el = element.createElement;
	var useBlockProps = blockEditor.useBlockProps;
	var ServerSideRender = serverSideRender;

	blocks.registerBlockType( 'meridian/estimator', {
		edit: function () {
			var blockProps = useBlockProps( { className: 'meridian-estimator-editor-wrap' } );

			return el(
				'div',
				blockProps,
				ServerSideRender
					? el( ServerSideRender, {
							block: 'meridian/estimator',
					  } )
					: el(
							'div',
							{ className: 'meridian-estimator-placeholder' },
							'Meridian Estimator — the live, interactive quote tool renders on the front end.'
					  )
			);
		},
		save: function () {
			// Dynamic block: rendered by render.php on the server.
			return null;
		},
	} );
} )(
	window.wp.blocks,
	window.wp.element,
	window.wp.blockEditor,
	window.wp.serverSideRender
);
